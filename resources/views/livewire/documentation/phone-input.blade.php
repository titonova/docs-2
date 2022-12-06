<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#phone-input" label="Phone Input">
                <x-summary.item href="#default-input" label="Default Input" />
                <x-summary.item href="#custom-input-mask" label="Custom Input mask" />
                <x-summary.item href="#create-custom-input" label="Create a Custom Input" />
            </x-summary.header>

            <x-summary.header href="#input-options" label="Inputs Options" />
        </x-summary>
    </x-slot>

    <div id="phone-input">
        <x-section.title title="Phone Input" href="#phone-input" />
        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The phone input extends the maskable input, and sets default input mask.
            </p>
        </div>
    </div>

    <x-code-preview
        title="Default Input"
        href="#default-input"
        id="default-input"
        language="html"
        :code="$defaultExample">
        <div class="mx-auto max-w-sm">
            <x-inputs.phone id="phone" wire:model.defer="phone" label="Phone" placeholder="Phone" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Custom Input Mask"
        href="#custom-input-mask"
        id="custom-input-mask"
        language="html"
        :code="$customMaskExample">
        <div class="mx-auto max-w-sm">
            <x-inputs.phone
                id="multiple-mask"
                wire:model.defer="phone"
                label="Phone"
                placeholder="Phone"
                mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
            />
        </div>
    </x-code-preview>

    <div id="create-custom-input">
        <x-section.title title="Create a Custom Input" href="#create-custom-input" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                You can create a new input component by just extending the default component.
            </p>
        </div>

        <x-code language="php" :contents="$customInputExample" />
    </div>

    <div id="input-options">
        <x-section.title href="#input-options" title="Input Options" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The phone input accepts all
                <a class="dark:text-secondary-500" href="{{ route('docs.maskable-inputs') }}#input-options">maskable</a>
                input options and slots
            </p>
        </div>
    </div>
</div>
