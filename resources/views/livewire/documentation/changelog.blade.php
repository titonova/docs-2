<div class="space-y-10">
    <div id="changelog">
        <x-section.title title="Changelog" />

        <div class="my-14"></div>

        <x-changelog.panel>
            <x-changelog.card
                release="v0.11.0"
                type="release"
                date="2021-07-26">
                <h2 class="text-lg font-semibold mb-2">Added</h2>

                - add prop to use option key as label or value on select and native select <br>
                - add prop to remove modal card close button

                <h2 class="text-lg font-semibold mt-5 mb-2">Fixed</h2>
                - add id on label to use focus <br>
                - add modal listeners attributes

                <h2 class="text-lg font-semibold mt-5 mb-2">Removed</h2>
                - remove divider from card
            </x-changelog.card>

            <x-changelog.card
                release="v0.10.0"
                type="release"
                date="2021-07-18">
                <h2 class="text-lg font-semibold mb-2">Added</h2>

                - dark mode

                <h2 class="text-lg font-semibold mt-5 mb-2">Upgrade Guide</h2>
                You have two choices, enable tailwind jit mode, or add the wireui styles before tailwindcss
                <br> We recommend using tailwind jit mode, if enabled, no need change anything

                <br> <br> if you prefer to not enable jit mode, follow below steps:
                <br> - add wireui styles
                <x-code language="html" :contents="$stylesExample" />

                <br> - disable jit mode in your <b>tailwind.config.js</b>
                <x-code language="js">
                    module.exports = {
                        ...
                        mode: 'default',
                        ...
                    }
                </x-code>
            </x-changelog.card>

            <x-changelog.card
                release="0.9.4"
                type="hotfix"
                date="2021-07-13">
                <h2 class="text-lg font-semibold mb-2">Fixed</h2>

                - remove margin without label in select
            </x-changelog.card>

            <x-changelog.card
                release="0.9.3"
                type="hotfix"
                date="2021-07-01 4:30PM">
                <h2 class="text-lg font-semibold mb-2">Added</h2>

                - Slovak language
            </x-changelog.card>

            <x-changelog.card
                release="0.9.2"
                type="hotfix"
                date="2021-06-27 3:15PM">
                <h2 class="text-lg font-semibold mb-2">Added</h2>

                - add default colors
            </x-changelog.card>

            <x-changelog.card
                release="0.9.1"
                type="hotfix"
                date="2021-06-25 2:00PM">
                <h2 class="text-lg font-semibold mb-2">Fixed</h2>

                - Fix modal full height in mobile devices
            </x-changelog.card>

            <x-changelog.card
                release="0.9.0"
                type="release"
                date="2021-06-24 11:10PM">
                <h2 class="text-lg font-semibold mb-2">Fixed</h2>
                <p>
                    - fix time picker errors
                    <br> - fix date picker times search
                    <br> - fix date picker inside modals
                    <br> - fix time picker inside modals
                    <br> - fix select event
                </p>

                <h2 class="text-lg font-semibold mt-5 mb-2">Updated</h2>
                - upgrade alpinejs to V3

                <h2 class="text-lg font-semibold mt-5 mb-2">Upgrade Guide</h2>
                - Follow <a src="https://alpinejs.dev/upgrade-guide" class="text-blue-500">alpinejs upgrade guide</a>
                <br> - move wireui scripts to scripts above alpine.js as an example below

                <x-code language="html" :contents="$upgradeGuide" />

                <p class="mt-2">
                    Change your tailwindcss content config
                </p>
                <x-code language="js">
                    module.exports = {
                        ...
                        content: [
                            ...
                            './vendor/ph7jack/wireui/resources/**/*.blade.php',
                            './vendor/ph7jack/wireui/ts/**/*.ts',
                            './vendor/ph7jack/wireui/src/View/**/*.php'
                        ],
                        ...
                    }
                </x-code>
            </x-changelog.card>

            <x-changelog.card
                release="0.8.2"
                type="hotfix"
                date="2021-06-22 9:10PM">
                <h2 class="text-lg font-semibold mb-2">Fixed</h2>

                - fix spinner wire:target
            </x-changelog.card>

            <x-changelog.card
                release="0.8.1"
                type="feature"
                date="2021-06-22 9:00PM">
                <h2 class="text-lg font-semibold mb-2">Added</h2>

                - spinner loading in button
            </x-changelog.card>
        </x-changelog.panel>
    </div>

    <div class="h-64"></div>
</div>
