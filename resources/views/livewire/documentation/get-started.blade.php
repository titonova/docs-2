<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#meet-wireui" label="Meet WireUI" />

            <x-summary.header href="#installation" label="Installation">
                <x-summary.item href="#requirements" label="Requirements" />
                <x-summary.item href="#installing-package" label="Installing Package" />
                <x-summary.item href="#publishing" label="Publish Files" />
            </x-summary.header>
        </x-summary>
    </x-slot>

    <div id="meet-wireui">
        <x-section.title href="#meet-wireui" title="Meet WireUI" />

        <div class="mt-3 prose text-gray-500 max-w-none">
            <p>
                The WireUI is a library of components and resources to empower your application development with Laravel and Livewire.
                Starting a new project with Livewire can be time-consuming when you have to create all the components from scratch. Wire UI helps to skip this step and get you straight to the development phase.
            </p>

            <p>
                Installing WireUI enriches your project with:
            </p>

            <ul>
                <li>Form and UI components</li>
                <li>Notifications</li>
                <li>Confirmation notifications</li>
                <li>All Heroicons</li>
            </ul>
        </div>
    </div>

    <div id="requirements">
        <x-section.title href="#requirements" title="Requirements" />

        <div class="mt-3 prose text-gray-500 max-w-none">
            <ul>
                <li>Laravel 8.x</li>
                <li>Livewire 2.5 or above</li>
                <li>Alpine.js 3.x</li>
                <li>Tailwindcss 2.x</li>
                <li>PHP 7.4.x | 8.x</li>
                <li><a href="https://getcomposer.org" target="_blank" class="font-semibold text-center text-teal-600">Composer</a></li>
            </ul>
        </div>
    </div>

    <div id="installation">
        <x-section.title href="#installation" title="Installation" />

        <div class="mt-5 prose text-gray-500 max-w-none">
            <p id="installing-package">1. Run the following command to add WireUI to your project:</p>
            <x-code language="shell" code="composer require ph7jack/wireui" />

            <p>2. Add the WireUI <wireui:scripts /> tag above Alpinejs script tag in your page layout:<br/>
            
            <x-code language="html" :code="$scriptsExample" />
            
            <p>Alternatively, you can use the equivalent Blade directive:</p>

            <x-code language="html" :code="$directiveExample" />

            <p>3. Add the following settings to your Tailwindcss config (tailwind.config.js).</p>
            <x-code language="js" :code="$tailwindConfigExample" />
        </div>
    </div>

    <div id="publishing">
        <x-section.title href="#publishing" title="Publishing" />

        <div class="mt-5 prose text-gray-500 max-w-none xl:max-w-3xl">
            <p>
                WireUI does not need any additional configuration,
                but you can publish the files and customize them to your preference.
            </p>

            <x-code language="bash" :code="<<<EOT
            php artisan vendor:publish --tag='wireui.config'
            php artisan vendor:publish --tag='wireui.resources'
            php artisan vendor:publish --tag='wireui.lang'
            EOT" />
        </div>
    </div>
</div>
