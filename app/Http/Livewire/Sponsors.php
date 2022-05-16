<?php

namespace App\Http\Livewire;

use Livewire\Component;

/** @property-read array $sponsors */
class Sponsors extends Component
{
    public function getSponsorsProperty(): array
    {
        return [
            [
                'label' => 'Hofmann Vratny',
                'url'   => 'https://www.hofmann-vratny.de/en',
                'image' => 'assets/images/sponsors/hofmann-vratny.svg',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.sponsors');
    }
}
