<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#currency-input" label="Currency Input">
                <x-summary.item href="#default" label="Default Currency" />
                <x-summary.item href="#custom-currency" label="Custom Currency" />
                <x-summary.item href="#examples" label="Examples" />
            </x-summary.header>

            <x-summary.header href="#input-options" label="Inputs Options" />
        </x-summary>
    </x-slot>

    <div id="currency-input">
        <x-section.title title="Currency Input" href="#currency-input" />
        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The currency input helps us when we need a currency mask.
                It's possible to customize the currency separators and decimals precision.
            </p>
        </div>
    </div>

    <x-code-preview
        title="Default Currency"
        href="#default"
        id="default"
        language="html"
        :code="$defaultExample">
        <div class="mx-auto max-w-sm">
            <x-inputs.currency label="Currency" placeholder="Currency" wire:model.defer="currency" id="defaultExample" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Custom Currency"
        href="#custom-currency"
        id="custom-currency"
        language="html"
        :code="$customExample">
        <div class="mx-auto max-w-sm">
            <x-inputs.currency
                label="Currency"
                placeholder="Currency"
                thousands="."
                decimal=","
                precision="4"
                wire:model.defer="currency"
                id="customExample"
            />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Examples"
        href="#examples"
        id="examples"
        language="html"
        :code="$examples">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <x-inputs.currency
                label="Currency"
                placeholder="Currency"
                icon="currency-dollar"
                thousands="."
                decimal=","
                precision="4"
                wire:model.defer="currency"
                id="examples-1"
            />
            <x-inputs.currency label="Currency no Decimals" precision="0" wire:model.defer="currency" id="examples-2" />
            <x-inputs.currency label="Currency" wire:model.defer="currency" id="examples-3" />
            <x-inputs.currency label="Currency" prefix="R$" thousands="." decimal="," class="pl-10" wire:model.defer="currency" id="examples-4" />
        </div>
    </x-code-preview>

    <div id="input-options">
        <x-section.title href="#input-options" title="Input Options" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The currency input accepts all
                <a class="dark:text-secondary-500" href="{{ route('docs.inputs') }}#input-options">input</a>
                options and slots
            </p>
        </div>

        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="thousands"     required="false" default=","  type="string"   />
            <x-option-table-row prop="decimal"       required="false" default="."  type="string"   />
            <x-option-table-row prop="precision"     required="false" default="2" type="number"   />
            <x-option-table-row prop="emitFormatted" required="false" default="false" type="boolean"   />
        </x-options-table>
    </div>
</div>
