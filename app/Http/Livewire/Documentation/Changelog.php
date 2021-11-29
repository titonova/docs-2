<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Changelog extends Component
{
    public string $upgradeGuide = <<<HTML
    <html>
        <head>
            ...
            <wireui:scripts /> or @wireUiScripts

            <script src="alpine.js"></script>
            ...
        </head>
    </html>
    HTML;

    public string $stylesExample = <<<HTML
    <html>
        <head>
            ...
            <wireui:styles /> or @wireUiStyles

            <!-- your tailwind css file -->
            <link rel="stylesheet" href="{{ mix('dist/app.css') }}">
        </head>
    </html>
    HTML;

    public function render()
    {
        return view('livewire.documentation.changelog')->layout(Documentation::class);
    }
}
