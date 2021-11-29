<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class CurrencyInput extends Component
{
    public string $defaultExample = <<<HTML
    <x-inputs.currency label="Currency" placeholder="Currency" wire:model="currency" />
    HTML;

    public string $customExample = <<<HTML
    <x-inputs.currency
        label="Currency"
        placeholder="Currency"
        thousands="."
        decimal=","
        precision="4"
        wire:model="currency"
    />
    HTML;

    public string $examples = <<<HTML
    <x-inputs.currency
        label="Currency"
        placeholder="Currency"
        icon="currency-dollar"
        thousands="."
        decimal=","
        precision="4"
        wire:model="currency"
    />
    <x-inputs.currency label="Currency no Decimals" precision="0" wire:model="currency" />
    <x-inputs.currency label="Currency" wire:model="currency" />
    <x-inputs.currency label="Currency" prefix="R$" thousands="." decimal="," wire:model="currency" />
    HTML;

    public ?string $currency = null;

    public function render()
    {
        return view('livewire.documentation.currency-input')->layout(Documentation::class);
    }
}
