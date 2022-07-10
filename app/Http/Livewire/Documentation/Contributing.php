<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Contributing extends Component
{
    public $repository = <<<JSON
    {
        "repositories": {
            "wireui/wireui": {
                "type": "path",
                "url": "../wireui"
            }
        }
    }
    JSON;

    public function render()
    {
        return view('livewire.documentation.contributing')->layout(Documentation::class);
    }
}
