<?php

namespace App\Http\Livewire;

use App\View\Components\Layouts\Clean;
use Livewire\Component;

class Home extends Component
{
    public array $navbarLinks = [];

    public function mount()
    {
        $this->navbarLinks = [
            'Documentation' => route('docs.get-started'),
            'Heroicons'     => config('links.heroicons'),
        ];
    }

    public function render()
    {
        return view('livewire.home')->layout(Clean::class);
    }
}
