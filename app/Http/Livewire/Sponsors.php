<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sponsors extends Component
{
    public array $sponsors = [
        [
            'label' => 'Hofmann Vratny',
            'url'   => 'https://www.hofmann-vratny.de/en',
            'image' => 'assets/images/sponsors/hofmann-vratny.svg',
        ],
        [
            'label' => 'DevSquad',
            'url'   => 'https://devsquad.com',
            'image' => 'assets/images/sponsors/devsquad.svg',
        ],
        [
            'label' => 'JetBrains',
            'url'   => 'https://www.jetbrains.com/community/opensource/#support',
            'image' => 'assets/images/sponsors/PhpStorm.svg',
        ],
    ];

    public function render(): View
    {
        return view('livewire.sponsors');
    }
}
