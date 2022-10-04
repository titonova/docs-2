<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#inputs" label="Number Input">
                <x-summary.item href="#number-input" label="Number Input" />
            </x-summary.header>

            <x-summary.header href="#input-options" label="Inputs Options" />
        </x-summary>
    </x-slot>

    <div>
        <x-section.title id="inputs" title="Number Input" />

        <div class="mt-5 prose text-gray-500 xl:max-w-4xl xl:mb-8 dark:text-gray-400">
            This component will add an easy way to manipulate numbers, like ecommerce products quantity.
        </div>
    </div>

    <div class="space-y-4">
        <x-code-preview
            title="Number Input"
            href="#number-input"
            id="number-input"
            language="blade"
            :code="$numberExample">
            <div class="max-w-sm mx-auto">
                <x-inputs.number label="How many Burgers?" />
            </div>
        </x-code-preview>

        <p class="dark:text-gray-400">
            See more about the <x-mark>x-hold</x-mark> directive
            <a class="underline" href="https://www.npmjs.com/package/@wireui/alpinejs-hold-directive">here</a>
        </p>

        <div x-data="{ count: 0 }" class="flex items-center gap-x-3">
            <x-button x-hold.click.repeat.200ms="count--" icon="minus" />

            <span class="bg-teal-600 text-white px-5 py-1.5 rounded-lg" x-text="count"></span>

            <x-button x-hold.click.repeat.200ms="count++" icon="plus" />
        </div>

        <x-code language="blade" :contents="$holdExample" />
    </div>

    <div id="input-options">
        <x-section.title href="#input-options" title="Input Options" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The phone input accepts all
                <a class="dark:text-secondary-500" href="{{ route('docs.inputs') }}#input-options">input</a>
                options and slots
            </p>
        </div>
    </div>
</div>
