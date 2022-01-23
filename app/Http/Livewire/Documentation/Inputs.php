<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Inputs extends Component
{
    public string $wireModelExample = <<<HTML
    <x-input wire:model="firstName" label="Name" placeholder="User's first name" />
    HTML;

    public string $simpleInputExample = <<<HTML
    <x-input label="Name" placeholder="your name" />
    HTML;

    public string $hintInputExample = <<<HTML
    <x-input label="Name" placeholder="your name" hint="Inform your full name" />
    HTML;

    public string $cornerHintInputExample = <<<HTML
    <x-input label="Name" placeholder="your name" corner-hint="Ex: John" />
    HTML;

    public string $iconInputExample = <<<HTML
    <x-input icon="user" label="Name" placeholder="your name" />
    HTML;

    public string $rightIconInputExample = <<<HTML
    <x-input right-icon="user" label="Name" placeholder="your name" />
    HTML;

    public string $twoIconsInputExample = <<<HTML
    <x-input icon="user" right-icon="pencil" label="Name" placeholder="your name" />
    HTML;

    public string $prefixInputExample = <<<HTML
    <x-input class="pl-[104px]" label="Website" placeholder="your-website.com" prefix="https://www." />
    HTML;

    public string $suffixInputExample = <<<HTML
    <x-input class="pr-28" label="Email" placeholder="your email" suffix="@mail.com" />
    HTML;

    public string $prependInputExample = <<<HTML
    <x-input label="Name" placeholder="your name" class="pl-12">
        <x-slot name="prepend">
            <div class="absolute inset-y-0 left-0 flex items-center p-0.5">
                <x-button
                    class="h-full rounded-l-md"
                    icon="sort-ascending"
                    primary
                    flat
                    squared
                />
            </div>
        </x-slot>
    </x-input>
    HTML;

    public string $appendInputExample = <<<HTML
    <x-input label="Name" placeholder="your name">
        <x-slot name="append">
            <div class="absolute inset-y-0 right-0 flex items-center p-0.5">
                <x-button
                    class="h-full rounded-r-md"
                    icon="sort-ascending"
                    primary
                    flat
                    squared
                />
            </div>
        </x-slot>
    </x-input>
    HTML;

    public string $changeColorInputExample = <<<HTML
    <x-input color="focus:ring-red-500 focus:border-red-500 border-red-500 placeholder-red-300" placeholder="your name" />
    HTML;

    public function render()
    {
        return view('livewire.documentation.inputs')->layout(Documentation::class);
    }
}
