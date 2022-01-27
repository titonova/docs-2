<div class="space-y-10">
    <div>
        <x-section.title title="Colors Customization" />

        <div class="mt-5 mb-2 prose text-gray-500 xl:max-w-3xl xl:mb-8">
            <p>
                You can customize default colors for all WireUI components: Notifications, dialogs, inputs, selects, buttons... 
                <br/>
                You just need to extend Tailwind Colors setting in <x-mark>tailwind.config.js</x-mark> adding preferred ones. <br>
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
