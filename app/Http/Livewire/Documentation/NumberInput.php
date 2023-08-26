<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class NumberInput extends Component
{
    public string $numberExample = <<<HTML
    <x-inputs.number label="How many Burgers?" />
    HTML;

    public string $holdExample = <<<HTML
    <div x-data="{ count: 0 }" class="flex items-center gap-x-3">
        <x-button x-hold.click.repeat.200ms="count--" icon="minus" />

        <span class="bg-teal-600 text-white px-5 py-1.5" x-text="count"></span>

        <x-button x-hold.click.repeat.200ms="count++" icon="plus" />
    </div>
    HTML;

    public function render(): View
    {
        return view('livewire.documentation.number-input')->layout(Documentation::class);
    }
}
