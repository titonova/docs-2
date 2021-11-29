<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#simple-toggle" label="Toggle">
                <x-summary.item href="#simple-toggle" label="Simple Toggle" />
                <x-summary.item href="#labeled-toggle" label="Toggle With Label" />
                <x-summary.item href="#toggle-sizes" label="Toggle Sizes" />
            </x-summary.header>

            <x-summary.header href="#toggle-options" label="Toggle Options" />
        </x-summary>
    </x-slot>

    <x-code-preview
        title="Simple Toggle"
        href="#simple-toggle"
        id="simple-toggle"
        language="html"
        :code="$simpleToggle">
        <div class="flex flex-wrap gap-4">
            <x-toggle id="toggle" wire:model.defer="model" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Toggle With Label"
        href="#labeled-toggle"
        id="labeled-toggle"
        language="html"
        :code="$labelToggle">
        <div class="flex flex-wrap gap-4">
            <x-toggle id="left-label" left-label="Label in Left" wire:model.defer="model" />
            <x-toggle id="right-label" label="Label in Right" wire:model.defer="model" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Toggle Sizes"
        href="#toggle-sizes"
        id="toggle-sizes"
        language="html"
        :code="$toggleSizes">
        <div class="flex flex-wrap gap-4">
            <x-toggle id="sm" wire:model.defer="model" />
            <x-toggle id="md" md wire:model.defer="model" />
            <x-toggle id="lg" lg wire:model.defer="model" />
        </div>
    </x-code-preview>

    <div id="toggle-options">
        <x-section.title href="#toggle-options" title="Toggle Options" />
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
