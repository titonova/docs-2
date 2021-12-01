#!/bin/bash
                  #╔═════════════════════╗#
                  #║     WireUI  Setup   ║#
                  #╚═════════════════════╝#

# ══════════════ STYLES ═════════

NC='\033[0m'
WHITE='\033[1;37m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
LABEL_OK="\n\033[048;5;64m   OK   ${NC} "
LABEL_WARNING="\n\033[048;5;208m WARNING ${NC} "
LABEL_ERROR="\n\033[048;5;9m ERROR ${NC} "
LABEL_WIREUI="\n\033[48;5;29m\033[1m WireUI ${NC} "

# ══════════════ FUNCTIONS ═════════

checkPhp () {
  if ! php --version >/dev/null 2>&1; then
    echo -e "${LABEL_ERROR}PHP is required!"
    exit 1;
  fi
}

checkYarn () {
  if ! yarn --version >/dev/null 2>&1; then
    echo -e "${LABEL_ERROR}Yarn is required! Visit: https://yarnpkg.com for instructions."
    exit 1;
  fi
}

checkComposer () {
  if ! composer --version >/dev/null 2>&1; then
    echo -e "${LABEL_ERROR}Yarn is required! Visit: https://getcomposer.org for instructions."
    exit 1;
  fi
}

composerInstall () {

  if [ ! -d ./vendor ]; then
    echo -e "${LABEL_WIREUI}Installing project dependencies with composer..."

    composer install

    if [ ! $? -eq 0 ]; then
        echo -e "${LABEL_ERROR}Error installing dependencies with composer!"
        exit 1;
    fi
  fi
}

compileAssets () {
    echo -e "${LABEL_WIREUI}Compiling assets..."

    yarn install

    yarn run prod

    if [ ! $? -eq 0 ]; then
        echo -e "${LABEL_ERROR}Error compiling assets..."
        exit 1;
    fi
}

generateAppKey(){
    HAS_KEY=$(grep APP_KEY=base64 .env)

    if [  -f ./.env ] && [ -z "$HAS_KEY"  ]; then
        echo -e "${LABEL_WIREUI}generating Laravel App Key... 🗝️"
        php artisan key:generate --ansi

        if [ ! $? -eq 0 ]; then
              echo -e "${LABEL_ERROR}App Key was not generated!"
              exit 1;
        fi
    fi
}

TorchlightToken(){
    HAS_TOKEN=$(grep TORCHLIGHT_TOKEN=torch_ .env)

    if [  -f ./.env ] && [ -z "$HAS_TOKEN"  ]; then
        read -p "$(echo -e "${LABEL_WIREUI}Enter your ${YELLOW}Torchlight TOKEN${NC} (get it at https://torchlight.dev)\n${YELLOW}➔${NC}")"  TOKEN

        if [ -z "$TOKEN" ]; then
          echo -e "${LABEL_ERROR}Token is required!"
          exit 1;
        fi

        if [[ ! $TOKEN == torch_* ]]; then
          echo -e "${LABEL_ERROR}Token seems to be invalid!"
          exit 1;
        fi

        ENVFILE=$(sed -e "s/TORCHLIGHT_TOKEN=[^\"]*/TORCHLIGHT_TOKEN=$TOKEN/" .env)
        echo -e "$ENVFILE"> .env

        echo -e "${LABEL_OK}TOKEN was successfully added to your ${YELLOW}.env${NC} file!"
    fi
}

# ══════════════ SCRIPT ═════════

echo -e "${LABEL_WIREUI}${YELLOW}Let's begin!${NC}"

if  [ ! -f ./.env ] && [ -f .env.example ]; then
  echo -e "${LABEL_WIREUI}Copying ${YELLOW}.env.example${NC} into ${YELLOW}.env${NC}"
  cp .env.example .env
fi

checkYarn

checkComposer

composerInstall

TorchlightToken

generateAppKey

compileAssets

echo -e "${LABEL_OK}All good! Run ${YELLOW}php artisan serve${NC} to start a PHP Server!"

echo -e "${LABEL_WIREUI}🙏 Thank you for contributing!"
