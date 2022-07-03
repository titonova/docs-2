<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#troubleshooting" label="Troubleshooting">
                <x-summary.item href="#requirements" label="Requirements" />
                <x-summary.item href="#tailwind-forms" label="Tailwind-forms" />
            </x-summary.header>
        </x-summary>
    </x-slot>

    <div id="troubleshooting">
        <x-section.title href="#troubleshooting" title="Troubleshooting" />

        <div class="mt-3 prose text-gray-500 max-w-none">
            <p>
                This page contains common issues encountered with WireUI and their solutions.
                <br>If you haven't found the problem you are trying to fix, review the <a class="font-semibold text-center text-teal-600 underline" href="https://github.com/wireui/wireui/issues" target="_blank">Issues</a> page at the WireUI GitHub repository.<br/>In case your problem has not been discussed there, feel free to open a new Issue, informing as many details as possible.
            </p>
        </div>
    </div>

    <div id="version-update">
        <x-section.title href="#version-update" title="Version Update" />

        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>If you have recently updated WireUI and are facing issues, make sure to read the specific information for your version before proceeding in this section.</p>
            <p>To stay informed about WireUI's latest news, follow the author <a class="text-indigo-700 underline" href="https://twitter.com/ph7jack" target="_blank">@ph7jack</a> on Twitter. </p>
        </div>
    </div>

    <div id="https-http">
        <x-section.title href="#version-update" title="WireUI not using https" />

        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>If your assets (scripts, css files) are loaded with <x-mark>http://</x-mark> instead of <x-mark>https://</x-mark>, you may try the following steps:</p>

            <p>1. Make sure the `APP_URL` inside your <x-mark>.env</x-mark> file is set with https prefix.</p>

            <x-code language="shell" contents="APP_URL=https://example.com" />

            <p>2. Run the command below to clear Laravel's cache:</p>

            <x-code :line-numbers="false" language="shell" contents="php artisan optimize:clear" />
        </div>
    </div>

    <div id="tailwind-forms">
        <x-section.title href="#tailwind-forms" title="Tailwind-forms" />

        <div class="mt-5 prose text-gray-500 max-w-none">
            <p id="installing-package">If you have encountered the error <x-mark>TypeError: require(...) is not a function</x-mark>, you must update your Tailwind-Forms to
                <x-mark>"^0.3.0"</x-mark>. This is often the case with Laravel Breeze installation.
            </p>
            <p>Error:</p>

            <x-code no-copy :line-numbers="false" language="shell" :contents="$tailwindFormsError" />

            <p>Solution:</p>

            <p>Modify your Tailwind-forms version and then, run <x-mark>npm update</x-mark> command.</p>
            <x-code language="js" :contents="$tailwindFormsUpdate" />
        </div>
    </div>
</div>
