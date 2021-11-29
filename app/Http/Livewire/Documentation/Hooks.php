<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Hooks extends Component
{
    public function render()
    {
        return view('livewire.documentation.hooks')->layout(Documentation::class);
    }
}
