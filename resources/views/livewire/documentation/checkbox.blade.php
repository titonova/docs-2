<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#simple-checkbox" label="Checkbox">
                <x-summary.item href="#simple-checkbox" label="Simple Checkbox" />
                <x-summary.item href="#labeled-checkbox" label="Checkbox With Label" />
                <x-summary.item href="#checkbox-sizes" label="Checkbox Sizes" />
            </x-summary.header>

            <x-summary.header href="#checkbox-options" label="Checkbox Options" />
        </x-summary>
    </x-slot>

    <x-code-preview
        title="Simple Checkbox"
        href="#simple-checkbox"
        id="simple-checkbox"
        language="html"
        :code="$simpleCheckbox">
        <div class="flex flex-wrap gap-4">
            <x-checkbox id="checkbox" wire:model.defer="model" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Checkbox With Label"
        href="#labeled-checkbox"
        id="labeled-checkbox"
        language="html"
        :code="$labelCheckbox">
        <div class="flex flex-wrap gap-4">
            <x-checkbox id="left-label" left-label="Label in Left" wire:model.defer="model" />
            <x-checkbox id="right-label" label="Label in Right" wire:model.defer="model" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Checkbox Sizes"
        href="#checkbox-sizes"
        id="checkbox-sizes"
        language="html"
        :code="$checkboxSizes">
        <div class="flex flex-wrap gap-4">
            <x-checkbox id="sm" wire:model.defer="model" />
            <x-checkbox id="md" md wire:model.defer="model" />
            <x-checkbox id="lg" lg wire:model.defer="model" />
        </div>
    </x-code-preview>

    <div id="checkbox-options">
        <x-section.title href="#checkbox-options" title="Checkbox Options" />
        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="id"         required="false" default="none" type="string" />
            <x-option-table-row prop="name"       required="false" default="none" type="string" />
            <x-option-table-row prop="label"      required="false" default="none" type="string" />
            <x-option-table-row prop="left-label" required="false" default="none" type="string" />
            <x-option-table-row prop="md"         required="false" default="false" type="bool" />
            <x-option-table-row prop="lg"         required="false" default="false" type="bool" />
        </x-options-table>
    </div>
</div>
