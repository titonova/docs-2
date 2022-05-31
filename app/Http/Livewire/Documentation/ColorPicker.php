<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class ColorPicker extends Component
{
    public string $defaultExample = '<x-color-picker label="Select a Color" placeholder="Select the car color" />';

    public string $customPhpExample = <<<HTML
        <x-color-picker
            label="Select a Color"
            placeholder="Select the book color"
            :colors="[
                [ 'name' => 'White',  'value' => '#FFF' ],
                [ 'name' => 'Black',  'value' => '#000' ],
                [ 'name' => 'Teal',   'value' => '#14b8a6' ],
                [ 'name' => 'Slate',  'value' => '#64748b' ],
                [ 'name' => 'Red',    'value' => '#ef4444' ],
                [ 'name' => 'Lime',   'value' => '#a3e635' ],
                [ 'name' => 'Sky',    'value' => '#38bdf8' ],
                [ 'name' => 'Violet', 'value' => '#8b5cf6' ],
                [ 'name' => 'Pink',   'value' => '#8b5cf6' ],
                [ 'name' => 'Indigo', 'value' => '#6366f1' ],
            ]"
        />

        <x-color-picker
            label="Select a Color"
            placeholder="Select the book color"
            :colors="[
                '#FFF',
                '#000',
                '#14b8a6',
                '#64748b',
                '#ef4444',
                '#a3e635',
                '#38bdf8',
                '#8b5cf6',
                '#8b5cf6',
                '#6366f1',
            ]"
        />
    HTML;

    public function render()
    {
        return view('livewire.documentation.color-picker')->layout(Documentation::class);
    }
}
