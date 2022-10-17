<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Badges extends Component
{
    public string $defaultColorsCode = <<<HTML
    <x-badge label="Default" />
    <x-badge primary label="Primary" />
    <x-badge secondary label="Secondary" />
    <x-badge positive label="Positive" />
    <x-badge negative label="Negative" />
    <x-badge warning label="Warning" />
    <x-badge info label="Info" />
    <x-badge dark label="Dark" />
    <x-badge white label="White" />
    <x-badge black label="Black" />
    <x-badge slate label="Slate" />
    <x-badge gray label="Gray" />
    <x-badge zinc label="Zinc" />
    <x-badge neutral label="Neutral" />
    <x-badge stone label="Stone" />
    <x-badge red label="Red" />
    <x-badge orange label="Orange" />
    <x-badge amber label="Amber" />
    <x-badge lime label="Lime" />
    <x-badge green label="Green" />
    <x-badge emerald label="Emerald" />
    <x-badge teal label="Teal" />
    <x-badge cyan label="Cyan" />
    <x-badge sky label="Sky" />
    <x-badge blue label="Blue" />
    <x-badge indigo label="Indigo" />
    <x-badge violet label="Violet" />
    <x-badge purple label="Purple" />
    <x-badge fuchsia label="Fuchsia" />
    <x-badge pink label="Pink" />
    <x-badge rose label="Rose" />
    HTML;

    public string $outlineColorsCode = <<<HTML
    <x-badge outline label="Default" />
    <x-badge outline primary label="Primary" />
    <x-badge outline secondary label="Secondary" />
    <x-badge outline positive label="Positive" />
    <x-badge outline negative label="Negative" />
    <x-badge outline warning label="Warning" />
    <x-badge outline info label="Info" />
    <x-badge outline dark label="Dark" />
    <x-badge outline white label="White" />
    <x-badge outline black label="Black" />
    <x-badge outline slate label="Slate" />
    <x-badge outline gray label="Gray" />
    <x-badge outline zinc label="Zinc" />
    <x-badge outline neutral label="Neutral" />
    <x-badge outline stone label="Stone" />
    <x-badge outline red label="Red" />
    <x-badge outline orange label="Orange" />
    <x-badge outline amber label="Amber" />
    <x-badge outline lime label="Lime" />
    <x-badge outline green label="Green" />
    <x-badge outline emerald label="Emerald" />
    <x-badge outline teal label="Teal" />
    <x-badge outline cyan label="Cyan" />
    <x-badge outline sky label="Sky" />
    <x-badge outline blue label="Blue" />
    <x-badge outline indigo label="Indigo" />
    <x-badge outline violet label="Violet" />
    <x-badge outline purple label="Purple" />
    <x-badge outline fuchsia label="Fuchsia" />
    <x-badge outline pink label="Pink" />
    <x-badge outline rose label="Rose" />
    HTML;

    public string $flatColorsCode = <<<HTML
    <x-badge flat label="Default" />
    <x-badge flat primary label="Primary" />
    <x-badge flat secondary label="Secondary" />
    <x-badge flat positive label="Positive" />
    <x-badge flat negative label="Negative" />
    <x-badge flat warning label="Warning" />
    <x-badge flat info label="Info" />
    <x-badge flat dark label="Dark" />
    <x-badge flat white label="White" />
    <x-badge flat black label="Black" />
    <x-badge flat slate label="Slate" />
    <x-badge flat gray label="Gray" />
    <x-badge flat zinc label="Zinc" />
    <x-badge flat neutral label="Neutral" />
    <x-badge flat stone label="Stone" />
    <x-badge flat red label="Red" />
    <x-badge flat orange label="Orange" />
    <x-badge flat amber label="Amber" />
    <x-badge flat lime label="Lime" />
    <x-badge flat green label="Green" />
    <x-badge flat emerald label="Emerald" />
    <x-badge flat teal label="Teal" />
    <x-badge flat cyan label="Cyan" />
    <x-badge flat sky label="Sky" />
    <x-badge flat blue label="Blue" />
    <x-badge flat indigo label="Indigo" />
    <x-badge flat violet label="Violet" />
    <x-badge flat purple label="Purple" />
    <x-badge flat fuchsia label="Fuchsia" />
    <x-badge flat pink label="Pink" />
    <x-badge flat rose label="Rose" />
    HTML;

    public string $roundedBadgesCode = <<<HTML
    <x-badge rounded label="No Color" />
    <x-badge rounded primary label="Primary" />
    <x-badge rounded secondary label="Secondary" />
    <x-badge rounded positive label="Positive" />
    <x-badge rounded negative label="Negative" />
    <x-badge rounded warning label="Warning" />
    <x-badge rounded info label="Info" />
    <x-badge rounded dark label="Dark" />
    HTML;

    public string $squaredBadgesCode = <<<HTML
    <x-badge squared label="No Color" />
    <x-badge squared primary label="Primary" />
    <x-badge squared secondary label="Secondary" />
    <x-badge squared positive label="Positive" />
    <x-badge squared negative label="Negative" />
    <x-badge squared warning label="Warning" />
    <x-badge squared info label="Info" />
    <x-badge squared dark label="Dark" />
    HTML;

    public string $circleBadgesCode = <<<HTML
    <x-badge.circle icon="home" />
    <x-badge.circle primary icon="pencil" />
    <x-badge.circle secondary icon="clipboard-list"  />
    <x-badge.circle positive icon="check" />
    <x-badge.circle negative icon="x" />
    <x-badge.circle warning icon="exclamation" />
    <x-badge.circle info icon="information-circle" />
    <x-badge.circle dark icon="ban" />
    <x-badge.circle secondary label="A"  />
    <x-badge.circle positive label="B" />
    <x-badge.circle negative label="C" />
    <x-badge.circle primary label="+" />
    HTML;

    public string $badgeIconsCode = <<<HTML
    <x-badge icon="home" label="Default" />
    <x-badge icon="pencil" primary label="Primary" />
    <x-badge icon="clipboard-list" secondary label="Secondary" />
    <x-badge icon="check" positive label="Positive" />
    <x-badge icon="x" negative label="Negative" />
    <x-badge icon="exclamation" warning label="Warning" />
    <x-badge right-icon="information-circle" info label="Info" />
    <x-badge right-icon="ban" dark label="Dark" />
    HTML;

    public string $badgeSizesCode = <<<HTML
    <x-badge icon="clipboard-list" secondary label="default size" />
    <x-badge md icon="clipboard-list" positive label="md size" />
    <x-badge lg icon="clipboard-list" negative label="lg size" />
    HTML;

    public function render()
    {
        return view('livewire.documentation.badges')->layout(Documentation::class);
    }
}
