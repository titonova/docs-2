<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#select" label="Select">
                <x-summary.item href="#async-search" label="Async Search" />
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
            <x-summary.header href="#after-options-slot" label="After Options Slot" />
            <x-summary.header href="#select-slots" label="Select Slots" />
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
        title="Async Search"
        href="#async-search"
        id="async-search"
        language="html"
        :code="$asyncSearch">
        <x-select
            class="sm:max-w-xs"
            label="Search a User"
            wire:model.defer="asyncSearchUser"
            placeholder="Select some user"
            :async-data="route('api.users.index')"
            always-fetch
            option-label="name"
            option-value="id"
        />
    </x-code-preview>

    <div class="mt-3 prose text-gray-500 max-w-none">
        <b>How to Implement the async-search?</b>

        <p>
            The wireui will makes a request with the <x-mark>search</x-mark> <b>parameter(string)</b> when the user type in the input.
            <br /> When the component is initialized and have any selected value,
                   the select will send a request with the <x-mark>selected</x-mark> <b>parameter(array)</b> to find the selected option
            <br /> You are free to create your api as you want, just apply these two scopes: search and selected
        </p>

        <ul>
            <li>Create an api that returns an array in the response</li>
            <li>Set the <x-mark>option-label</x-mark> and <x-mark>option-value</x-mark> attributes</li>
            <li>
                Implement
                <a target="_Blank" href="https://github.com/wireui/docs/tree/main/app/Http/Controllers/Api/Users/Index.php#L17">search</a> scope
            </li>
            <li>
                Implement
                <a target="_Blank" href="https://github.com/wireui/docs/tree/main/app/Http/Controllers/Api/Users/Index.php#L23">selected</a> scope
             </li>
        </ul>
    </div>

    <x-alerts.info>
        Tip: See these files to read more about the <b>api</b> implementation.
        <br>
        <b>
            <a class="underline" target="_Blank" href="https://github.com/wireui/docs/tree/main/app/Http/Controllers/Api/Users/Index.php">
                Controller
            </a>,
            <a class="underline" target="_Blank" href="https://github.com/wireui/docs/tree/main/tests/Feature/Controllers/Api/Users/IndexTest.php">
                Test
            </a>
        </b>
    </x-alerts.info>

    <div>
        You can customize the asyncData prop to change the http method and add more data to the request.
        <x-code language="ts">
            export type AsyncDataConfig = {
                api: string | null
                method: string
                params: any
                alwaysFetch: boolean
            }
        </x-code>

        <br />

        How to Customize the async-data?
        <br />
        <b>
            The queryString params will be merged with the asyncData params
        </b>
        <x-code language="html" :contents="$asyncDataMethods" />
   </div>

    <x-code-preview
        title="Simple Options"
        href="#simple-options"
        id="simple-options"
        language="html"
        :code="$simpleOptions">
        <x-select
            class="sm:max-w-xs"
            label="Select Status"
            placeholder="Select one status"
            :options="['Active', 'Pending', 'Stuck', 'Done']"
            wire:model.defer="model"
        />
    </x-code-preview>

    <x-code-preview
        title="Multi Select"
        href="#multiselect"
        id="multiselect"
        language="html"
        :code="$multiselect">
        <x-select
            class="sm:max-w-xs"
            label="Select Statuses"
            placeholder="Select many statuses"
            multiselect
            :options="['Active', 'Pending', 'Stuck', 'Done']"
            wire:model.defer="modelMultiple"
        />
    </x-code-preview>

    <x-code-preview
        title="Custom Options"
        href="#custom-options"
        id="custom-options"
        language="html"
        :code="$customOptions">
        <x-select
            class="sm:max-w-xs"
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
    </x-code-preview>

    <x-code-preview
        title="Option With Description"
        href="#option-with-description"
        id="option-with-description"
        language="html"
        :code="$optionWithDescription">
        <x-select
            class="sm:max-w-xs"
            label="Order Status"
            placeholder="Select one status"
            :options="[
                ['name' => 'Active',  'id' => 1, 'description' => 'The status is active'],
                ['name' => 'Pending', 'id' => 2, 'description' => 'The status is pending'],
                ['name' => 'Stuck',   'id' => 3, 'description' => 'The status is stuck'],
                ['name' => 'Done',    'id' => 4, 'description' => 'The status is done'],
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
        <x-select
            class="sm:max-w-xs"
            label="Select Status"
            placeholder="Select one status"
            wire:model.defer="model"
        >
            <x-select.option label="Pending" value="1" />
            <x-select.option label="In Progress" value="2" />
            <x-select.option label="Stuck" value="3" />
            <x-select.option label="Done" value="4" />
        </x-select>
    </x-code-preview>

    <x-code-preview
        title="Customizable Option"
        href="#customizable-options"
        id="customizable-options"
        language="html"
        :code="$customizableOptions">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:max-w-lg">
            <x-select
                label="Select Relator"
                placeholder="Select relator"
                wire:model.defer="model"
            >
                <x-select.user-option :src="asset('assets/images/andre.jpeg')" label="André Luiz" value="1" />
                <x-select.user-option :src="asset('assets/images/fernando.jpeg')" label="Fernando Gunther" value="2" />
                <x-select.user-option :src="asset('assets/images/keithyellen.jpg')" label="Keithyellen Huhn" value="3" />
                <x-select.user-option :src="asset('assets/images/pedro.jpg')" label="Pedro Henrique" value="4" />
            </x-select>

            <x-select
                label="Search a User"
                wire:model.defer="asyncSearchRelator"
                placeholder="Select some user"
                :async-data="route('api.users.index')"
                :template="[
                    'name'   => 'user-option',
                    'config' => ['src' => 'profile_image']
                ]"
                option-label="name"
                option-value="id"
                option-description="email"
            />
        </div>
    </x-code-preview>

    <div id="select-options">
        <x-section.title href="#select-options" title="Select Options" />
        <x-options-table class="mt-2 mb-6 w-full">
            <x-option-table-row prop="label"              required="false" default="none"     type="string" available="*" />
            <x-option-table-row prop="placeholder"        required="false" default="none"     type="string" available="*" />
            <x-option-table-row prop="option-value"       required="false" default="none"     type="string" available="*" />
            <x-option-table-row prop="option-label"       required="false" default="none"     type="string" available="*" />
            <x-option-table-row prop="option-description" required="false" default="none"     type="string" available="*" />
            <x-option-table-row prop="options"            required="false" default="none"     type="Collection|array" available="*" />
            <x-option-table-row prop="flip-options"       required="false" default="false"    type="boolean" />
            <x-option-table-row prop="option-key-value"   required="false" default="false"    type="boolean" />
            <x-option-table-row prop="clearable"          required="false" default="true"     type="boolean" available="boolean" />
            <x-option-table-row prop="searchable"         required="false" default="true"     type="boolean" available="boolean" />
            <x-option-table-row prop="multiselect"        required="false" default="false"    type="boolean" available="boolean" />
            <x-option-table-row prop="icon"               required="false" default="none"     type="string"  available="all heroicons" />
            <x-option-table-row prop="rightIcon"          required="false" default="selector" type="string"  available="all heroicons" />
            <x-option-table-row prop="async-data"         required="false" default="none"     type="string|AsyncDataConfig"  available="all endpoints" />
            <x-option-table-row prop="always-fetch"       required="false" default="none"     type="string" available="true|false" />
            <x-option-table-row prop="template"           required="false" default="default"  type="string|array" available="default|user-option" />
            <x-option-table-row prop="empty-message"      required="false" default="__('wireui::messages.empty_options')" type="string" available="*" />
            <x-option-table-row prop="hide-empty-message" required="false" default="false"    type="boolean" available="boolean" />
        </x-options-table>

        <div id="default-option">
            <x-section.title href="#default-option" title="Default Option" />
            <x-options-table class="mt-2 mb-6 w-full" :available="false">
                <x-option-table-row prop="description" required="false" default="none"  type="string" />
                <x-option-table-row prop="label"       required="false" default="none"  type="string|null" />
                <x-option-table-row prop="value"       required="true"  default="none"  type="ayn" />
                <x-option-table-row prop="readonly"    required="false" default="false" type="boolean" />
                <x-option-table-row prop="disabled"    required="false" default="false" type="boolean" />
                <x-option-table-row prop="option"      required="false" default="none"  type="Model|stdClass|array|null" />
            </x-options-table>
        </div>

        <div id="user-option">
            <x-section.title href="#user-option" title="User Option" />
            <x-options-table class="mt-2 mb-6 w-full" :available="false">
                <x-option-table-row prop="description" required="false" default="none"  type="string" />
                <x-option-table-row prop="label"       required="true"  default="none"  type="string|null" />
                <x-option-table-row prop="value"       required="true"  default="none"  type="any" />
                <x-option-table-row prop="readonly"    required="false" default="false" type="boolean" />
                <x-option-table-row prop="disabled"    required="false" default="false" type="boolean" />
                <x-option-table-row prop="src"         required="true"  default="none"  type="string|null" />
                <x-option-table-row prop="option"      required="true"  default="none"  type="Model|stdClass|array|null" />
            </x-options-table>
        </div>

        <div id="select-events">
            <x-section.title href="#select-events" title="Select Events" />
            <x-code language="html" :contents="$selectEvents" />
        </div>

        <br>

        <x-code-preview
            title="After Options Slot"
            href="#after-options-slot"
            id="after-options-slot"
            language="html"
            :code="$afterOptionsSlot"
        >
            <x-select
                class="sm:max-w-xs"
                label="Search a User"
                wire:model.defer="asyncSearchUser"
                placeholder="Select some user"
                :async-data="route('api.users.index')"
                option-label="name"
                option-value="id"
                hide-empty-message
            >
                <x-slot name="afterOptions" class="p-2 flex justify-center" x-show="displayOptions.length === 0">
                    <x-button
                        x-on:click="
                            close;
                            $wireui.notify({ title: 'Not implemented yet', icon: 'info' })
                        "
                        primary
                        flat
                        full>
                        <span x-html="`Create user <b>${search}</b>`"></span>
                    </x-button>
                </x-slot>
            </x-select>
        </x-code-preview>

        <br />

        <div id="select-slots">
            <x-section.title href="#select-slots" title="Select Slots" />
            <x-code language="html" :contents="$selectSlots" />
        </div>
    </div>
</div>
