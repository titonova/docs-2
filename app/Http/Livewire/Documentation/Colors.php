<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Colors extends Component
{
    public function render()
    {
        return view('livewire.documentation.colors')->layout(Documentation::class);
    }
}
