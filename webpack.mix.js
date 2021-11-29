const mix = require('laravel-mix')

mix.js('resources/js/app.js', 'public/dist/app.js')
    .postCss('resources/css/app.css', 'public/dist', [
        require("tailwindcss"),
    ])

if (mix.inProduction()) {
    mix.version()
}
