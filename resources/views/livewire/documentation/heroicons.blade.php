<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#heroicons" label="Heroicons" />
            <x-summary.header href="#options" label="Options" />
        </x-summary>
    </x-slot>

    <x-section.title id="heroicons" href="heroicons" title="Heroicons" />
    <div class="mt-5 prose text-gray-500 max-w-none">
        <p>
            All <a class="text-indigo-600 no-underline" href="{{ config('links.heroicons') }}">Heroicons</a>
            icons are available using the component:
        </p>

        <x-code language="html" :contents='<<<EOT
        <x-icon name="home" class="w-5 h-5" />
        <x-icon name="home" style="solid" class="w-5 h-5" />
        EOT' />

        <p>You can publish the icon configuration and define what will be the default style</p>
        <x-code :line-numbers="false" language="bash" contents="php artisan vendor:publish --tag='wireui.config'" />

        <p>Or use an environment variable for that</p>
        <x-code language="bash" contents="WIREUI_ICONS_STYLE=solid" />
        <br/>
    </div>

    <x-section.title id="options" href="options" title="Options" />

    <x-options-table class="mt-10">
        <x-option-table-row prop="name"  required="true"  default="none"    type="string" available="all heroicons" />
        <x-option-table-row prop="style" required="false" default="outline" type="string" available="outline|solid" />
    </x-options-table>
</div>
