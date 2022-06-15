<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Select extends Component
{
    public string $asyncSearch = <<<HTML
    <x-select
        label="Search a User"
        wire:model="model"
        placeholder="Select some user"
        :async-data="route('users.index')"
        option-label="name"
        option-value="id"
    />
    HTML;

    public string $simpleOptions = <<<HTML
    <x-select
        label="Select Status"
        placeholder="Select one status"
        :options="['Active', 'Pending', 'Stuck', 'Done']"
        wire:model.defer="model"
    />
    HTML;

    public string $multiselect = <<<HTML
    <x-select
        label="Select Statuses"
        placeholder="Select many statuses"
        multiselect
        :options="['Active', 'Pending', 'Stuck', 'Done']"
        wire:model.defer="model"
    />
    HTML;

    public string $customOptions = <<<HTML
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
    HTML;

    public string $optionWithDescription = <<<HTML
    <x-select
        label="Select Status"
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
    HTML;

    public string $slotOptions = <<<HTML
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
    HTML;

    public string $customizableOptions = <<<HTML
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:max-w-lg">
        <x-select
            label="Select Relator"
            placeholder="Select relator"
            wire:model.defer="model"
        >
            <x-select.user-option src="https://via.placeholder.com/500" label="People 1" value="1" />
            <x-select.user-option src="https://via.placeholder.com/500" label="People 2" value="2" />
            <x-select.user-option src="https://via.placeholder.com/500" label="People 3" value="3" />
            <x-select.user-option src="https://via.placeholder.com/500" label="People 4" value="4" />
        </x-select>

        <x-select
            label="Search a User"
            wire:model.defer="asyncSearchUser"
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
    HTML;

    public string $selectEvents = <<<HTML
    <x-select
        ...
        x-on:open="alert('openned select')"
        x-on:close="alert('closed select')"
        x-on:select="alert('selected/unselected option')"
        x-on:clear="alert('cleared select')"
    >
        ...
    </x-select>
    HTML;

    public string $asyncDataMethods = <<<HTML
    <x-select ... :async-data="route('api.users.index', ['foo' => 'bar'])" />

    OR

    <x-select ...  :async-data="[
        'api' => route('api.users.index'),
        'method' => 'POST', // default is GET
        'params' => ['ble' => 'baz'] // default is []
    ]" />
    HTML;

    public string $selectSlots = <<<HTML
    <x-slot name="beforeOptions">
        // html code
    </x-slot>

    <x-slot name="afterOptions">
        // html code
    </x-slot>
    HTML;

    public $asyncSearchUser = [1];

    public $asyncSearchRelator = null;

    public $model = null;

    public $modelMultiple = [];

    public function render()
    {
        return view('livewire.documentation.select')->layout(Documentation::class);
    }
}
