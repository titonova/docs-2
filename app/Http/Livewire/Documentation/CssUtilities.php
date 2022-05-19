<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class CssUtilities extends Component
{
    public string $hideScrollbar = <<<HTML
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
        <div class="h-52 w-full overflow-x-auto p-2">
            <div class="relative flex items-center h-44 shadow-lg border rounded-lg bg-negative-500" style="width: 900px">
                <div class="absolute border-y-8 border-dashed border-white w-full h-8"></div>
            </div>
        </div>

        <div class="h-52 w-full hide-scrollbar overflow-x-auto p-2">
            <div class="relative flex items-center h-44 shadow-lg border rounded-lg bg-positive-500" style="width: 900px">
                <div class="absolute border-y-8 border-dotted border-white w-full h-8"></div>
            </div>
        </div>
    </div>
    HTML;

    public string $softScrollbar = <<<HTML
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
        <div class="h-52 w-full overflow-x-auto p-2">
            <div class="relative flex items-center h-44 shadow-lg border rounded-lg bg-negative-500" style="width: 900px">
                <div class="absolute border-y-8 border-dashed border-white w-full h-8"></div>
            </div>
        </div>

        <div class="h-52 w-full soft-scrollbar overflow-x-auto p-2">
            <div class="relative flex items-center h-44 shadow-lg border rounded-lg bg-positive-500" style="width: 900px">
                <div class="absolute border-y-8 border-dotted border-white w-full h-8"></div>
            </div>
        </div>
    </div>
    HTML;

    public function render()
    {
        return view('livewire.documentation.css-utilities')->layout(Documentation::class);
    }
}
