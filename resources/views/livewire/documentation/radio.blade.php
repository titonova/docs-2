<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#simple-radio" label="Radio">
                <x-summary.item href="#simple-radio" label="Simple Radio" />
                <x-summary.item href="#labeled-radio" label="Radio With Label" />
                <x-summary.item href="#radio-sizes" label="Radio Sizes" />
            </x-summary.header>

            <x-summary.header href="#radio-options" label="Radio Options" />
        </x-summary>
    </x-slot>

    <x-code-preview
        title="Simple Radio"
        href="#simple-radio"
        id="simple-radio"
        language="html"
        :code="$simpleRadio">
        <div class="flex flex-wrap gap-4">
            <x-radio id="radio" wire:model.defer="model" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Radio With Label"
        href="#labeled-radio"
        id="labeled-radio"
        language="html"
        :code="$labelRadio">
        <div class="flex flex-wrap gap-4">
            <x-radio id="left-label" left-label="Label in Left" wire:model.defer="model" />
            <x-radio id="right-label" label="Label in Right" wire:model.defer="model" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Radio Sizes"
        href="#radio-sizes"
        id="radio-sizes"
        language="html"
        :code="$radioSizes">
        <div class="flex flex-wrap gap-4">
            <x-radio id="sm" wire:model.defer="model" />
            <x-radio id="md" md wire:model.defer="model" />
            <x-radio id="lg" lg wire:model.defer="model" />
        </div>
    </x-code-preview>

    <div id="radio-options">
        <x-section.title href="#radio-options" title="Radio Options" />
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
