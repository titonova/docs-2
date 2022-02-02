<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Buttons extends Component
{
    public string $defaultColorsCode = <<<HTML
    <x-button label="Default" />
    <x-button primary label="Primary" />
    <x-button secondary label="Secondary" />
    <x-button positive label="Positive" />
    <x-button negative label="Negative" />
    <x-button warning label="Warning" />
    <x-button info label="Info" />
    <x-button dark label="Dark" />
    <x-button white label="White" />
    <x-button black label="Black" />
    <x-button slate label="Slate" />
    <x-button gray label="Gray" />
    <x-button zinc label="Zinc" />
    <x-button neutral label="Neutral" />
    <x-button stone label="Stone" />
    <x-button red label="Red" />
    <x-button orange label="Orange" />
    <x-button amber label="Amber" />
    <x-button lime label="Lime" />
    <x-button green label="Green" />
    <x-button emerald label="Emerald" />
    <x-button teal label="Teal" />
    <x-button cyan label="Cyan" />
    <x-button sky label="Sky" />
    <x-button blue label="Blue" />
    <x-button indigo label="Indigo" />
    <x-button violet label="Violet" />
    <x-button purple label="Purple" />
    <x-button fuchsia label="Fuchsia" />
    <x-button pink label="Pink" />
    <x-button rose label="Rose" />
    HTML;

    public string $outlineColorsCode = <<<HTML
    <x-button outline label="Default" />
    <x-button outline primary label="Primary" />
    <x-button outline secondary label="Secondary" />
    <x-button outline positive label="Positive" />
    <x-button outline negative label="Negative" />
    <x-button outline warning label="Warning" />
    <x-button outline info label="Info" />
    <x-button outline dark label="Dark" />
    <x-button outline white label="White" />
    <x-button outline black label="Black" />
    <x-button outline slate label="Slate" />
    <x-button outline gray label="Gray" />
    <x-button outline zinc label="Zinc" />
    <x-button outline neutral label="Neutral" />
    <x-button outline stone label="Stone" />
    <x-button outline red label="Red" />
    <x-button outline orange label="Orange" />
    <x-button outline amber label="Amber" />
    <x-button outline lime label="Lime" />
    <x-button outline green label="Green" />
    <x-button outline emerald label="Emerald" />
    <x-button outline teal label="Teal" />
    <x-button outline cyan label="Cyan" />
    <x-button outline sky label="Sky" />
    <x-button outline blue label="Blue" />
    <x-button outline indigo label="Indigo" />
    <x-button outline violet label="Violet" />
    <x-button outline purple label="Purple" />
    <x-button outline fuchsia label="Fuchsia" />
    <x-button outline pink label="Pink" />
    <x-button outline rose label="Rose" />
    HTML;

    public string $flatColorsCode = <<<HTML
    <x-button flat label="Default" />
    <x-button flat primary label="Primary" />
    <x-button flat secondary label="Secondary" />
    <x-button flat positive label="Positive" />
    <x-button flat negative label="Negative" />
    <x-button flat warning label="Warning" />
    <x-button flat info label="Info" />
    <x-button flat dark label="Dark" />
    <x-button flat white label="White" />
    <x-button flat black label="Black" />
    <x-button flat slate label="Slate" />
    <x-button flat gray label="Gray" />
    <x-button flat zinc label="Zinc" />
    <x-button flat neutral label="Neutral" />
    <x-button flat stone label="Stone" />
    <x-button flat red label="Red" />
    <x-button flat orange label="Orange" />
    <x-button flat amber label="Amber" />
    <x-button flat lime label="Lime" />
    <x-button flat green label="Green" />
    <x-button flat emerald label="Emerald" />
    <x-button flat teal label="Teal" />
    <x-button flat cyan label="Cyan" />
    <x-button flat sky label="Sky" />
    <x-button flat blue label="Blue" />
    <x-button flat indigo label="Indigo" />
    <x-button flat violet label="Violet" />
    <x-button flat purple label="Purple" />
    <x-button flat fuchsia label="Fuchsia" />
    <x-button flat pink label="Pink" />
    <x-button flat rose label="Rose" />
    HTML;

    public string $roundedButtonsCode = <<<HTML
    <x-button rounded label="No Color" />
    <x-button rounded primary label="Primary" />
    <x-button rounded secondary label="Secondary" />
    <x-button rounded positive label="Positive" />
    <x-button rounded negative label="Negative" />
    <x-button rounded warning label="Warning" />
    <x-button rounded info label="Info" />
    <x-button rounded dark label="Dark" />
    HTML;

    public string $squaredButtonsCode = <<<HTML
    <x-button squared label="No Color" />
    <x-button squared primary label="Primary" />
    <x-button squared secondary label="Secondary" />
    <x-button squared positive label="Positive" />
    <x-button squared negative label="Negative" />
    <x-button squared warning label="Warning" />
    <x-button squared info label="Info" />
    <x-button squared dark label="Dark" />
    HTML;

    public string $circleButtonsCode = <<<HTML
    <x-button.circle icon="home" />
    <x-button.circle primary icon="pencil" />
    <x-button.circle secondary icon="clipboard-list"  />
    <x-button.circle positive icon="check" />
    <x-button.circle negative icon="x" />
    <x-button.circle warning icon="exclamation" />
    <x-button.circle info icon="information-circle" />
    <x-button.circle dark icon="ban" />
    <x-button.circle secondary label="A"  />
    <x-button.circle positive label="B" />
    <x-button.circle negative label="C" />
    <x-button.circle primary label="+" />
    HTML;

    public string $buttonIconsCode = <<<HTML
    <x-button icon="home" label="Default" />
    <x-button icon="pencil" primary label="Primary" />
    <x-button icon="clipboard-list" secondary label="Secondary" />
    <x-button icon="check" positive label="Positive" />
    <x-button icon="x" negative label="Negative" />
    <x-button icon="exclamation" warning label="Warning" />
    <x-button right-icon="information-circle" info label="Info" />
    <x-button right-icon="ban" dark label="Dark" />
    HTML;

    public string $buttonSizesCode = <<<HTML
    <x-button xs icon="pencil" primary label="Extra Small Button" />
    <x-button sm icon="users" dark label="Small Button" />
    <x-button icon="clipboard-list" secondary label="Normal" />
    <x-button md icon="check" positive label="Medium Button" />
    <x-button lg icon="x" negative label="Large Button" />
    HTML;

    public string $loadingSpinnerCode = <<<HTML
    <x-button.circle wire:click="save" teal icon="check" spinner />
    <x-button wire:click="save" spinner primary label="Save without target" />
    <x-button wire:click="save" spinner="save" primary label="Save with target" />
    <x-button wire:click="save" spinner="save" loading-delay="short" primary label="Save with target + delay indicator" />
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
