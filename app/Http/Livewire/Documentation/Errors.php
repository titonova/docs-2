<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Errors extends Component
{
    public string $simpleExample = <<<HTML
    <x-errors />
    HTML;

    public string $filterExample = <<<HTML
    <x-errors only="name|email" />
    HTML;

    public string $titleExample = <<<HTML
    <x-errors title="We found {errors} validation error(s)" />
    HTML;

    public function mount()
    {
        $this->addError('name', 'The name field is required');
        $this->addError('email', 'You must inform a valid email');
        $this->addError('address', 'This address is invalid');
        $this->addError('phone', 'The phone field is required');
    }

    public function render()
    {
        return view('livewire.documentation.errors')->layout(Documentation::class);
    }
}
