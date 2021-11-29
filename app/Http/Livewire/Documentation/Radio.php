<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Radio extends Component
{
    public string $simpleRadio = <<<HTML
    <x-radio id="radio" wire:model.defer="model" />
    HTML;

    public string $labelRadio = <<<HTML
    <x-radio id="left-label" left-label="Label in Left" wire:model.defer="model" />
    <x-radio id="right-label" label="Label in Right" wire:model.defer="model" />
    HTML;

    public string $radioSizes = <<<HTML
    <x-radio id="sm" wire:model.defer="model" />
    <x-radio id="md" md wire:model.defer="model" />
    <x-radio id="lg" lg wire:model.defer="model" />
    HTML;

    public $model = false;

    public function render()
    {
        return view('livewire.documentation.radio')->layout(Documentation::class);
    }
}
