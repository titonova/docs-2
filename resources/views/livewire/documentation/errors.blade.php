<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#errors" label="Errors">
                <x-summary.item href="#all-errors" label="All Errors" />
                <x-summary.item href="#filtered-errors" label="Filtered Errors" />
                <x-summary.item href="#custom-title" label="Custom Title" />
            </x-summary.header>

            <x-summary.header href="#errors-options" label="Errors Options" />
        </x-summary>
    </x-slot>

    <div>
        <x-section.title id="errors" href="#errors" title="Errors" />

        <div class="mt-5 prose text-gray-500 xl:max-w-3xl xl:mb-8 dark:text-gray-400">
            <p>
               The <b>Errors</b> component is useful for displaying errors in a friendly way. 
            </p>
            <p>
               We can find this component often combined with the <a class="font-semibold text-center text-teal-600" href="{{ route('docs.inputs') }}">Inputs</a> component to report validation errors.
            </p>
        </div>


        <div class="flex items-start p-4 border rounded-lg gap-x-3 dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700">
            <x-icon name="information-circle" class="flex-shrink-0 w-5 h-5 text-blue-400" />

            <p class="text-sm text-blue-700 dark:text-blue-400">
            Tip: You can customize the default error messages in the language translation files.
            </p>
        </div>
    </div>

    <x-code-preview
        title="All Errors"
        href="#all-errors"
        id="all-errors"
        language="html"
        :code="$simpleExample">
        <div class="max-w-lg mx-auto">
            <x-errors />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Filtered Errors"
        href="#filtered-errors"
        id="filtered-errors"
        language="html"
        :code="$filterExample">
        <div class="max-w-lg mx-auto">
            <x-errors only="name|email" />
        </div>
    </x-code-preview>

    <div class="space-y-4">
        <x-code-preview
            title="Custom Title"
            href="#custom-title"
            id="custom-title"
            language="html"
            :code="$titleExample">
            <div class="max-w-lg mx-auto">
                <x-errors title="We found {errors} validation error(s)" />
            </div>
        </x-code-preview>

        <div class="flex items-start p-4 border rounded-lg gap-x-3 dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700">
            <x-icon name="information-circle" class="flex-shrink-0 w-5 h-5 text-blue-400" />

            <p class="text-sm text-blue-700 dark:text-blue-400">
                Tip: The key <b>{errors}</b> will be replaced with the number of error messages.
            </p>
        </div>
    </div>

    <div id="errors-options">
        <x-section.title href="#errors-options" title="Errors Options" />
        <x-options-table class="w-full mt-2 mb-6" :available="false">
            <x-option-table-row prop="title" required="false" default="[...]" type="string" />
            <x-option-table-row prop="only"  required="false" default="none" type="string|array" />
        </x-options-table>
    </div>
</div>
