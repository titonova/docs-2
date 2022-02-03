<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Troubleshooting extends Component
{
    public string $tailwindFormsError = <<<SHELL
    ERROR in ./resources/css/app.css
    Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):
    ModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):
    TypeError: require(...) is not a function
    ...
    1 ERROR in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details)
    webpack compiled with 2 errors
    SHELL;

    public string $tailwindFormsUpdate = <<<JS
      "devDependencies": {
        "@tailwindcss/forms": "^0.3.0",
        //..
      }
    JS;

    public function render()
    {
        return view('livewire.documentation.troubleshooting')->layout(Documentation::class);
    }
}
