<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#native-select" label="Native Select">
                <x-summary.item href="#simple-options" label="Simple Options" />
                <x-summary.item href="#custom-options" label="Custom Options" />
                <x-summary.item href="#slot-options" label="Slot Options" />
            </x-summary.header>

            <x-summary.header href="#native-select-options" label="Native Select Options" />
        </x-summary>
    </x-slot>

    <div id="native-select">
        <x-section.title title="Native Select" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The Native Select component has support to render default html select with slot or options prop. See Examples.
            </p>
        </div>
    </div>

    <x-code-preview
        title="Simple Options"
        href="#simple-options"
        id="simple-options"
        language="html"
        :code="$simpleOptions">
        <x-native-select
            class="sm:max-w-xs"
            label="Select Status"
            placeholder="Select one status"
            :options="['Active', 'Pending', 'Stuck', 'Done']"
            wire:model.defer="model"
        />
    </x-code-preview>

    <x-code-preview
        title="Custom Options"
        href="#custom-options"
        id="custom-options"
        language="html"
        :code="$customOptions">
        <x-native-select
            class="sm:max-w-xs"
            label="Select Status"
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
    </x-code-preview>

    <x-code-preview
        title="Slot Options"
        href="#slot-options"
        id="slot-options"
        language="html"
        :code="$slotOptions">
        <x-native-select class="sm:max-w-xs" label="Select Status" wire:model.defer="model">
            <option>Active</option>
            <option>Pending</option>
            <option>Stuck</option>
            <option>Done</option>
        </x-native-select>
    </x-code-preview>

    <div id="native-select-options">
        <x-section.title href="#native-select-options" title="Native Select Options" />
        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="label"            required="false" default="none"  type="string" />
            <x-option-table-row prop="placeholder"      required="false" default="none"  type="string" />
            <x-option-table-row prop="option-value"     required="false" default="none"  type="string" />
            <x-option-table-row prop="option-label"     required="false" default="none"  type="string" />
            <x-option-table-row prop="flip-options"     required="false" default="false" type="boolean" />
            <x-option-table-row prop="option-key-value" required="false" default="false" type="boolean" />
            <x-option-table-row prop="options"          required="false" default="none"  type="Collection|array|null" />
        </x-options-table>
    </div>
</div>
