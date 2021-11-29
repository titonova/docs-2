<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Toggle extends Component
{
    public string $simpleToggle = <<<HTML
    <x-toggle wire:model.defer="model" />
    HTML;

    public string $labelToggle = <<<HTML
    <x-toggle left-label="Label in Left" wire:model.defer="model" />
    <x-toggle label="Label in Right" wire:model.defer="model" />
    HTML;

    public string $toggleSizes = <<<HTML
    <x-toggle wire:model.defer="model" />
    <x-toggle md wire:model.defer="model" />
    <x-toggle lg wire:model.defer="model" />
    HTML;

    public $model = false;

    public function render()
    {
        return view('livewire.documentation.toggle')->layout(Documentation::class);
    }
}
