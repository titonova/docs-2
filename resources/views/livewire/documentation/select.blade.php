<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#select" label="Select">
                <x-summary.item href="#simple-options" label="Simple Options" />
                <x-summary.item href="#multiselect" label="Multi Select" />
                <x-summary.item href="#custom-options" label="Custom Options" />
                <x-summary.item href="#slot-options" label="Slot Options" />
                <x-summary.item href="#customizable-options" label="Customizable Option" />
            </x-summary.header>

            <x-summary.header href="#select-options" label="Select Options" />
            <x-summary.header href="#default-option" label="Default Option" />
            <x-summary.header href="#user-option" label="User Option" />
            <x-summary.header href="#select-events" label="Select Events" />
        </x-summary>
    </x-slot>

    <div id="select">
        <x-section.title title="Select" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The Select component has support to render default html select with slot or options prop.
                Can customize option component for one or all options.
                See Examples.
            </p>
        </div>
    </div>

    <x-code-preview
        title="Simple Options"
        href="#simple-options"
        id="simple-options"
        language="html"
        :code="$simpleOptions">
        <div class="flex flex-wrap gap-4">
            <x-select
                label="Select Status"
                placeholder="Select one status"
                :options="['Active', 'Pending', 'Stuck', 'Done']"
                wire:model.defer="model"
            />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Multi Select"
        href="#multiselect"
        id="multiselect"
        language="html"
        :code="$multiselect">
        <div class="flex flex-wrap gap-4">
            <x-select
                label="Select Statuses"
                placeholder="Select many statuses"
                multiselect
                :options="['Active', 'Pending', 'Stuck', 'Done']"
                wire:model.defer="modelMultiple"
            />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Custom Options"
        href="#custom-options"
        id="custom-options"
        language="html"
        :code="$customOptions">
        <div class="flex flex-wrap gap-4">
            <x-select
                label="Select Status"
                placeholder="Select one status"
                :options="[
                    ['name' => 'Active',  'id' => 1],
                    ['name' => 'Pending', 'id' => 2],
                    ['name' => 'Stuck',   'id' => 3],
                    ['name' => 'Done',    'id' => 4],
                ]"
                option-label="name"
                option-value="id"
                wire:model.defer="model"
            />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slot Options"
        href="#slot-options"
        id="slot-options"
        language="html"
        :code="$slotOptions">
        <div class="flex flex-wrap gap-4">
            <x-select
                label="Select Status"
                placeholder="Select one status"
                wire:model.defer="model"
            >
                <x-select.option label="Pending" value="1" />
                <x-select.option label="In Progress" value="2" />
                <x-select.option label="Stuck" value="3" />
                <x-select.option label="Done" value="4" />
            </x-select>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Customizable Option"
        href="#customizable-options"
        id="customizable-options"
        language="html"
        :code="$customizableOptions">
        <div class="flex flex-wrap gap-4">
            <x-select
                label="Select Relator"
                placeholder="Select relator"
                wire:model.defer="model"
            >
                <x-select.user-option :img="asset('assets/images/andre.jpeg')" label="André Luiz" value="1" />
                <x-select.user-option :img="asset('assets/images/fernando.jpeg')" label="Fernando Gunther" value="2" />
                <x-select.user-option :img="asset('assets/images/keithyellen.jpg')" label="Keithyellen Huhn" value="3" />
                <x-select.user-option :img="asset('assets/images/pedro.jpg')" label="Pedro Henrique" value="4" />
            </x-select>
        </div>
    </x-code-preview>

    <div id="select-options">
        <x-section.title href="#select-options" title="Select Options" />
        <x-options-table class="mt-2 mb-6 w-full">
            <x-option-table-row prop="label"        required="false" default="none" type="string" available="*" />
            <x-option-table-row prop="placeholder"  required="false" default="none" type="string" available="*" />
            <x-option-table-row prop="option-value" required="false" default="none" type="string" available="*" />
            <x-option-table-row prop="option-label" required="false" default="none" type="string" available="*" />
            <x-option-table-row prop="option-key-label" required="false" default="false" type="boolean" />
            <x-option-table-row prop="option-key-value" required="false" default="false" type="boolean" />
            <x-option-table-row prop="options"      required="false" default="none" type="Collection|array"   available="*" />
            <x-option-table-row prop="optionComponent" required="false" default="select.option" type="string" available="select.option|select.user-option" />
            <x-option-table-row prop="clearable"       required="false" default="true"    type="boolean"  available="boolean" />
            <x-option-table-row prop="searchable"      required="false" default="true"    type="boolean"  available="boolean" />
            <x-option-table-row prop="multiselect"     required="false" default="false"    type="boolean" available="boolean" />
            <x-option-table-row prop="icon"            required="false" default="none"     type="string"  available="all heroicons" />
            <x-option-table-row prop="rightIcon"       required="false" default="selector" type="string"  available="all heroicons" />
        </x-options-table>

        <div id="default-option">
            <x-section.title href="#default-option" title="Default Option" />
            <x-options-table class="mt-2 mb-6 w-full" :available="false">
                <x-option-table-row prop="label"    required="false" default="none"  type="string" />
                <x-option-table-row prop="value"    required="false" default="none"  type="string" />
                <x-option-table-row prop="readonly" required="false" default="false" type="boolean" />
                <x-option-table-row prop="disabled" required="false" default="false" type="boolean" />
                <x-option-table-row prop="option"   required="false" default="none"  type="array" />
            </x-options-table>
        </div>

        <div id="user-option">
            <x-section.title href="#user-option" title="User Option" />
            <x-options-table class="mt-2 mb-6 w-full" :available="false">
                <x-option-table-row prop="label"    required="false" default="none"  type="string" />
                <x-option-table-row prop="value"    required="false" default="none"  type="string" />
                <x-option-table-row prop="readonly" required="false" default="false" type="boolean" />
                <x-option-table-row prop="disabled" required="false" default="false" type="boolean" />
                <x-option-table-row prop="img"      required="false" default="none"  type="string" />
                <x-option-table-row prop="option"   required="false" default="none"  type="array" />
            </x-options-table>
        </div>

        <div id="select-events">
            <x-section.title href="#select-events" title="Select Events" />
            <x-code language="html" :contents="$selectEvents" />
        </div>
</div>
