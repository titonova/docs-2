<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Cards extends Component
{
    public string $simpleCard = <<<HTML
    <x-card>
        // code
    </x-card>
    HTML;

    public string $cardTitle = <<<HTML
    <x-card title="Your title here">
        // code
    </x-card>
    HTML;

    public string $actionSlot = <<<HTML
    <x-card title="Your title here">
        <x-slot name="action">
            <button class="rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-600">
                <x-icon name="dots-vertical" class="w-4 h-4 text-gray-500" />
            </button>
        </x-slot>

        // code
    </x-card>
    HTML;

    public string $footerSlot = <<<HTML
    <x-card title="Your title here">
        // code

        <x-slot name="footer">
            <div class="flex justify-between items-center">
                <x-button label="Delete" flat negative />
                <x-button label="Save" primary />
            </div>
        </x-slot>
    </x-card>
    HTML;

    public function render()
    {
        return view('livewire.documentation.cards')->layout(Documentation::class);
    }
}
