<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#meet-wireui" label="Meet Wire UI" />

            <x-summary.header href="#installation" label="Installation">
                <x-summary.item href="#requirements" label="Requirements" />
                <x-summary.item href="#installing-package" label="Installing Package" />
                <x-summary.item href="#publishing" label="Publish Files" />
            </x-summary.header>
        </x-summary>
    </x-slot>

    <div id="meet-wireui">
        <x-section.title href="#meet-wireui" title="Meet Wire UI" />

        <div class="mt-3 prose max-w-none text-gray-500">
            <p>
                The Wire UI is a library of components and resources to empower your application development with Laravel and Livewire.
                Starting a new project with Livewire can be a little boring at first because you have to create all the
                components manually, Wire UI exists to skip this step and go straight to development.
            </p>

            <p>
                Using the Wire UI in your project, you will have some advantages:
            </p>

            <ul>
                <li>Form and UI components</li>
                <li>Notifications</li>
                <li>Confirmation notifications</li>
                <li>All Heroicons</li>
            </ul>

            <p>
                Start using it now and enjoy everything that is available
            </p>
        </div>
    </div>

    <div id="requirements">
        <x-section.title href="#requirements" title="Requirements" />

        <div class="mt-3 prose max-w-none text-gray-500">
            <ul>
                <li>Laravel 8.x</li>
                <li>Livewire 2.5 or above</li>
                <li>Alpine.js 3.x</li>
                <li>Tailwindcss 2.x</li>
                <li>PHP 7.4.x | 8.x</li>
            </ul>
        </div>
    </div>

    <div id="installation">
        <x-section.title href="#installation" title="Installation" />

        <div class="mt-5 prose max-w-none text-gray-500">
            <p id="installing-package">Use the composer to install this library in your project</p>
            <x-code language="shell" code="composer require ph7jack/wireui" />

            <p>Now add the scripts to layout, above alpinejs script</p>
            <x-code language="html" :code="$scriptsExample" />

            <p>Add this in your TailwindCss config</p>
            <x-code language="js" :code="$tailwindConfigExample" />
        </div>
    </div>

    <div id="publishing">
        <x-section.title href="#publishing" title="Publishing" />

        <div class="mt-5 prose max-w-none xl:max-w-3xl text-gray-500">
            <p>
                Wire UI does not need any additional configuration,
                but you can publish the files and configure as you like some preferences
            </p>

            <x-code language="bash" :code="<<<EOT
            php artisan vendor:publish --tag='wireui.config'
            php artisan vendor:publish --tag='wireui.resources'
            php artisan vendor:publish --tag='wireui.lang'
            EOT" />
        </div>
    </div>
</div>
