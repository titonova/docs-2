<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class LivewireUsage extends Component
{
    public function render()
    {
        return view('livewire.documentation.usage')->layout(Documentation::class);
    }
}
