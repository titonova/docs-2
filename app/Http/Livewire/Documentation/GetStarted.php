<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class GetStarted extends Component
{
    public const REQUIREMENTS = [
        'Laravel 8.x'           => 'https://laravel.com',
        'Livewire 2.5 or above' => 'https://laravel-livewire.com',
        'Alpine.js 3.x'         => 'https://alpinejs.dev',
        'Tailwindcss 3.x'       => 'https://tailwindcss.com',
        'PHP 7.4.x | 8.x'       => 'https://www.php.net',
        'Composer'              => 'https://getcomposer.org',
    ];

    public string $directiveExample = <<<HTML
        ...
        @wireUiScripts
        <script src="//unpkg.com/alpinejs"></script>
        ...
    HTML;

    public string $scriptsExample = <<<HTML
    <html>
        <head>
            ...
            <wireui:scripts />
            <script src="//unpkg.com/alpinejs"></script>
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
        content: [
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
