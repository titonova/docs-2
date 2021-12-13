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
            </p>
            <p>
                If you haven't found the problem you are trying to fix, review the <a class="font-semibold text-center text-teal-600 underline" href="https://github.com/wireui/wireui/issues" target="_blank">Issues</a> page at the WireUI GitHub repository.<br/>In case your problem has not been discussed there, feel free to open a new Issue, informing as many details as possible.
            </p>
        </div>
    </div>
    
    <div id="tailwind-forms">
        <x-section.title href="#tailwind-forms" title="Tailwind-forms" />

        <div class="mt-5 prose text-gray-500 max-w-none">
            <p id="installing-package">If you have encountered the error <span class="px-2 py-2 font-mono text-sm font-semibold text-gray-900 bg-teal-100 rounded-md">TypeError: require(...) is not a function</span>, you must update your Tailwind-Forms to 
                <span class="px-2 py-2 font-mono text-sm font-semibold text-gray-900 bg-teal-100 rounded-md">"^0.3.0"</span>. This is often the case with Laravel Breeze installation.
            </p>
            <p>Error:</p>
            
            <x-code language="shell" :code="$tailwindFormsError" />
            <p>Solution:</p>
            
            <p>Modify your Tailwind-forms version and then, run <span class="px-2 py-2 font-mono text-sm font-semibold text-gray-900 bg-teal-100 rounded-md">npm update</span> command.</p>
            <x-code language="js" :code="$tailwindFormsUpdate" />
        </div>
    </div>
</div>