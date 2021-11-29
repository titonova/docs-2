<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Customization extends Component
{
    public function render()
    {
        return view('livewire.documentation.customization')->layout(Documentation::class);
    }
}
