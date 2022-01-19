<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Buttons extends Component
{
    public string $simpleButtonExample = <<<HTML
    <x-button label="No Color" />
    HTML;

    public string $buttonColorsExample = <<<HTML
    <x-button label="No Color" />
    <x-button primary label="Primary" />
    <x-button secondary label="Secondary" />
    <x-button positive label="Positive" />
    <x-button negative label="Negative" />
    <x-button warning label="Warning" />
    <x-button info label="Info" />
    <x-button dark label="Dark" />
    HTML;

    public string $outlineButtonsExample = <<<HTML
    <x-button outline label="No Color" />
    <x-button outline primary label="Primary" />
    <x-button outline secondary label="Secondary" />
    <x-button outline positive label="Positive" />
    <x-button outline negative label="Negative" />
    <x-button outline warning label="Warning" />
    <x-button outline info label="Info" />
    <x-button outline dark label="Dark" />
    HTML;

    public string $roundedButtonsExample = <<<HTML
    <x-button rounded label="No Color" />
    <x-button rounded primary label="Primary" />
    <x-button rounded secondary label="Secondary" />
    <x-button rounded positive label="Positive" />
    <x-button rounded negative label="Negative" />
    <x-button rounded warning label="Warning" />
    <x-button rounded info label="Info" />
    <x-button rounded dark label="Dark" />
    HTML;

    public string $squaredButtonsExample = <<<HTML
    <x-button squared label="No Color" />
    <x-button squared primary label="Primary" />
    <x-button squared secondary label="Secondary" />
    <x-button squared positive label="Positive" />
    <x-button squared negative label="Negative" />
    <x-button squared warning label="Warning" />
    <x-button squared info label="Info" />
    <x-button squared dark label="Dark" />
    HTML;

    public string $flatButtonsExample = <<<HTML
    <x-button flat label="No Color" />
    <x-button flat primary label="Primary" />
    <x-button flat secondary label="Secondary" />
    <x-button flat positive label="Positive" />
    <x-button flat negative label="Negative" />
    <x-button flat warning label="Warning" />
    <x-button flat info label="Info" />
    <x-button flat dark label="Dark" />
    HTML;

    public string $buttonIconsExample = <<<HTML
    <x-button icon="home" label="No Color" />
    <x-button icon="pencil" primary label="Primary" />
    <x-button icon="clipboard-list" secondary label="Secondary" />
    <x-button icon="check" positive label="Positive" />
    <x-button icon="x" negative label="Negative" />
    <x-button icon="exclamation" warning label="Warning" />
    <x-button icon="information-circle" info label="Info" />
    <x-button icon="ban" dark label="Dark" />
    HTML;

    public string $onlyIconsExample = <<<HTML
    <x-button icon="home" />
    <x-button icon="pencil" primary />
    <x-button icon="clipboard-list" secondary />
    <x-button icon="check" positive />
    <x-button icon="x" negative />
    <x-button icon="exclamation" warning />
    <x-button right-icon="information-circle" info />
    <x-button right-icon="ban" dark />
    HTML;

    public string $buttonSizesExample = <<<HTML
    <x-button xs icon="pencil" primary label="Primary" />
    <x-button icon="clipboard-list" secondary label="Secondary" />
    <x-button md icon="check" positive label="Positive" />
    <x-button lg icon="x" negative label="Negative" />
    HTML;

    public string $loadingSpinnerExample = <<<HTML
    <x-button wire:click="save" spinner primary label="Save without target" />
    <x-button wire:click="save" spinner="save" primary label="Save with target" />
    <x-button wire:click="save" spinner="save" loading-delay="short" primary label="Save with target + Delaying indicator" />
    HTML;

    public function sleeping(): void
    {
        sleep(2);
    }

    public function render()
    {
        return view('livewire.documentation.buttons')->layout(Documentation::class);
    }
}
