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

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500 dark:text-gray-400">
            <p>
                Use the <b>errors</b> component to show all validation errors or choose which ones to show
            </p>
        </div>
    </div>

    <x-code-preview
        title="All Errors"
        href="#all-errors"
        id="all-errors"
        language="html"
        :code="$simpleExample">
        <div class="mx-auto max-w-lg">
            <x-errors />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Filtered Errors"
        href="#filtered-errors"
        id="filtered-errors"
        language="html"
        :code="$filterExample">
        <div class="mx-auto max-w-lg">
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
            <div class="mx-auto max-w-lg">
                <x-errors title="We found {errors} validation error(s)" />
            </div>
        </x-code-preview>

        <div class="flex items-start gap-x-3 rounded-lg border dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700 p-4">
            <x-icon name="information-circle" class="h-5 w-5 flex-shrink-0 text-blue-400" />

            <p class="text-sm text-blue-700 dark:text-blue-400">
                Tip: The key <b>{errors}</b> will be replaced by errors count
                <br>
                Tip: You can customize the default error title in lang translation
            </p>
        </div>
    </div>

    <div id="errors-options">
        <x-section.title href="#errors-options" title="Errors Options" />
        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="title" required="false" default="[...]" type="string" />
            <x-option-table-row prop="only"  required="false" default="none" type="string|array" />
        </x-options-table>
    </div>
</div>
