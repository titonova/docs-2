<div class="space-y-10">
    <div>
        <x-section.title title="Colors Customization" />

        <div class="mt-5 mb-2 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                You can customize default colors to all components.
                Set default colors to notifications, dialogs, inputs, selects, buttons and anything <br>
                Just extends tailwind colors and set your colors <br>
            </p>
        </div>

        <x-code language="js" :code="<<<EOT
        const colors = require('tailwindcss/colors')

        module.exports = {
            ...
            theme: {
                extend: {
                    colors: {
                        ...
                        primary: colors.indigo,
                        secondary: colors.gray,
                        positive: colors.emerald,
                        negative: colors.red,
                        warning: colors.amber,
                        info: colors.blue
                    },
                },
            },
            ...
        }
        EOT" />
    </div>
</div>
