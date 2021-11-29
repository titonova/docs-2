<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Checkbox extends Component
{
    public string $simpleCheckbox = <<<HTML
    <x-checkbox id="checkbox" wire:model.defer="model" />
    HTML;

    public string $labelCheckbox = <<<HTML
    <x-checkbox id="left-label" left-label="Label in Left" wire:model.defer="model" />
    <x-checkbox id="right-label" label="Label in Right" wire:model.defer="model" />
    HTML;

    public string $checkboxSizes = <<<HTML
    <x-checkbox id="sm" wire:model.defer="model" />
    <x-checkbox id="md" md wire:model.defer="model" />
    <x-checkbox id="lg" lg wire:model.defer="model" />
    HTML;

    public $model = false;

    public function render()
    {
        return view('livewire.documentation.checkbox')->layout(Documentation::class);
    }
}
