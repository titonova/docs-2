<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#color-picker" label="Color Picker">
                <x-summary.item href="#default-colors" label="Default Colors" />
                <x-summary.item href="#tailwind-colors" label="Tailwind Colors" />
                <x-summary.item href="#custom-colors" label="Custom Colors" />
                <x-summary.item href="#color-name-as-value" label="Color name as value" />
            </x-summary.header>

            <x-summary.header href="#component-options" label="Component Options" />
        </x-summary>
    </x-slot>

    <div>
        <x-section.title title="Color Picker" />

        <div class="mt-5 prose text-gray-500 xl:max-w-3xl xl:mb-8 dark:text-gray-400">
            <p>
                The Color Picker component allows you to select a color from a palette of colors.
                You can customize the default colors or the colors for each component instance.
            </p>
        </div>

        <x-code-preview
            title="Color Picker"
            href="#color-picker"
            id="color-picker"
            language="html"
            :code="$defaultExample">
            <div class="max-w-xs">
                <x-color-picker label="Select a Color" placeholder="Select the car color" />
            </div>
        </x-code-preview>
    </div>

    <div id="default-colors">
        <x-section.title title="Default Colors" href="#default-colors" />

        <x-alerts.info class="my-5">
            You can customize the default colors from the
            <b class="text-teal-600">
                <a href="https://alpinejs.dev/globals/alpine-store" target="_blank">Alpine.js store</a>
            </b>
        </x-alerts.info>

        <b>From Alpine CDN</b>
        <x-code language="js">
            document.addEventListener('alpine:init', () => {
                Alpine.store('wireui:color-picker').setColors([
                    { name: 'White', value: '#FFF' },
                    { name: 'Black', value: '#000' },
                    { name: 'Teal',  value: '#14b8a6' },
                ])
            })
        </x-code>

        <div class="my-4"></div>

        <b>From Node Modules</b>
        <x-code language="js">
            import Alpine from 'alpinejs'

            Alpine.store('wireui:color-picker').setColors([
                { name: 'White', value: '#FFF' },
                { name: 'Black', value: '#000' },
                { name: 'Teal',  value: '#14b8a6' },
            ])

            Alpine.start()
        </x-code>
    </div>

    <div id="default-colors">
        <x-section.title title="Tailwind Colors" href="#tailwind-colors" />

        <x-alerts.info class="my-5">
            Sometimes you want to use the Tailwind colors from your Tailwind CSS config, just use the below code to generate the new colors.
            If you are using TypeScript see
            <b class="text-teal-600">
                <a href="https://github.com/wireui/wireui/blob/e3e3aff647b306ec1883c7dabec208daaa475d46/ts/components/color-picker/colors.ts" target="_blank">this file</a>
            </b>
        </x-alerts.info>

        <x-code language="js">
            import Alpine from 'alpinejs'
            // update with your Tailwind config path
            import { theme } from '@/tailwind.config.js'

            // array of duplicated colors to exclude
            const excludeColors = [
                'primary',
                'secondary',
                'positive',
                'negative',
                'warning',
                'info'
            ]

            const makeColors = () => {
                const tailwindColors = theme.extend.colors ?? {}

                const colors = Object.entries(tailwindColors).flatMap(([name, values]) => {
                    if (typeof values === 'string' || excludeColors.includes(name)) {
                        return []
                    }

                    return Object.entries(values).map(([tonality, hex]) => ({
                        name: `${name}-${tonality}`,
                        value: hex
                    }))
                })

                colors.push({ name: 'White', value: '#fff' })
                colors.push({ name: 'Black', value: '#000' })

                return colors
            }

            Alpine.store('wireui:color-picker').setColors(makeColors())
        </x-code>
    </div>

    <x-alerts.warning>
        Remember to pass a correct colors options into the component attributes.
    </x-alerts.warning>

    <x-code-preview
        title="Custom Colors"
        href="#custom-colors"
        id="custom-colors"
        language="html"
        :code="$customPhpExample">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-color-picker
                label="Select a Color"
                placeholder="Select the book color"
                :colors="[
                    [ 'name' => 'White',  'value' => '#FFF' ],
                    [ 'name' => 'Black',  'value' => '#000' ],
                    [ 'name' => 'Teal',   'value' => '#14b8a6' ],
                    [ 'name' => 'Slate',  'value' => '#64748b' ],
                    [ 'name' => 'Red',    'value' => '#ef4444' ],
                    [ 'name' => 'Lime',   'value' => '#a3e635' ],
                    [ 'name' => 'Sky',    'value' => '#38bdf8' ],
                    [ 'name' => 'Violet', 'value' => '#8b5cf6' ],
                    [ 'name' => 'Pink',   'value' => '#8b5cf6' ],
                    [ 'name' => 'Indigo', 'value' => '#6366f1' ],
                ]"
            />

            <x-color-picker
                label="Select a Color"
                placeholder="Select the book color"
                :colors="[
                    '#FFF',
                    '#000',
                    '#14b8a6',
                    '#64748b',
                    '#ef4444',
                    '#a3e635',
                    '#38bdf8',
                    '#8b5cf6',
                    '#8b5cf6',
                    '#6366f1',
                ]"
            />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Color name as value"
        href="#color-name-as-value"
        id="color-name-as-value"
        language="html"
        :code="$colorNameAsValueExample">
        <x-color-picker
            class="sm:max-w-xs"
            label="Select a Color"
            placeholder="Select the book color"
            color-name-as-value
        />
    </x-code-preview>

    <div id="component-options">
        <x-section.title href="#component-options" title="Component Options" />

        <div wire:click="$refresh" class="mt-5 prose text-gray-500 xl:max-w-3xl xl:mb-8 dark:text-gray-400">
            <p>
                The Color Picker component receives all options from the <a href="{{ route('docs.inputs') }}#input-options">input component</a>,
                except the prefix, icon and the slots prepend and append.
            </p>
        </div>

        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="colors" required="false" default="all tailwind colors" type="array|Collection" />
        </x-options-table>
    </div>
</div>
