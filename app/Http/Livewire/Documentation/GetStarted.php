<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class GetStarted extends Component
{
    public string $directiveExample = <<<HTML
        ...
        @wireUiScripts
        <script src="alpine.js"></script>
        ...
    HTML;

    public string $scriptsExample = <<<HTML
    <html>
        <head>
            ...
            <wireui:scripts />
            <script src="alpine.js"></script>
        </head>
    </html>
    HTML;

    public string $tailwindConfigExample = <<<JS
    module.exports = {
        ...
        presets: [
            ...
            require('./vendor/wireui/wireui/tailwind.config.js')
        ],
        purge: [
            ...
            './vendor/wireui/wireui/resources/**/*.blade.php',
            './vendor/wireui/wireui/ts/**/*.ts',
            './vendor/wireui/wireui/src/View/**/*.php'
        ],
        ...
    }
    JS;

    public function render()
    {
        return view('livewire.documentation.get-started')->layout(Documentation::class);
    }
}
