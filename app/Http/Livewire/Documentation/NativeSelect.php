<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class NativeSelect extends Component
{
    public string $simpleOptions = <<<HTML
    <x-native-select
        label="Select Status"
        placeholder="Select one status"
        :options="['Active', 'Pending', 'Stuck', 'Done']"
        wire:model="model"
    />
    HTML;

    public string $customOptions = <<<HTML
    <x-native-select
        label="Select Status"
        :options="[
            ['name' => 'Active',  'id' => 1],
            ['name' => 'Pending', 'id' => 2],
            ['name' => 'Stuck',   'id' => 3],
            ['name' => 'Done',    'id' => 4],
        ]"
        option-label="name"
        option-value="id"
        wire:model="model"
    />
    HTML;

    public string $slotOptions = <<<HTML
    <x-native-select label="Select Status" wire:model="model">
        <option>Active</option>
        <option>Pending</option>
        <option>Stuck</option>
        <option>Done</option>
    </x-native-select>
    HTML;

    public $model = null;

    public function render()
    {
        return view('livewire.documentation.native-select')->layout(Documentation::class);
    }
}
