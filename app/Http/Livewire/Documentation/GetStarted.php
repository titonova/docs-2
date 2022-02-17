<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class GetStarted extends Component
{
    public const REQUIREMENTS = [
        'PHP 8.x'                         => 'https://www.php.net',
        'Composer'                        => 'https://getcomposer.org',
        'Laravel 9.x'                     => 'https://laravel.com',
        'Livewire 2.10+'                  => 'https://laravel-livewire.com',
        'Alpine.js 3.x'                   => 'https://alpinejs.dev',
        'Tailwindcss 3.x'                 => 'https://tailwindcss.com',
        '@tailwindcss/aspect-ratio 0.4.x' => 'https://tailwindcss.com/docs/plugins#forms',
        '@tailwindcss/forms 0.4.x'        => 'https://tailwindcss.com/docs/plugins#forms',
        '@tailwindcss/typography 0.5.x'   => 'https://tailwindcss.com/docs/plugins#typography',
    ];

    public string $directiveExample = <<<HTML
        ...
        @wireUiScripts
        <script src="//unpkg.com/alpinejs" defer></script>
        ...
    HTML;

    public string $scriptsExample = <<<HTML
    <html>
        <head>
            ...
            <wireui:scripts />
            <script src="//unpkg.com/alpinejs" defer></script>
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
