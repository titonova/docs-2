<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Textarea extends Component
{
    public string $wireModelExample = <<<HTML
    <x-textarea wire:model="comment" label="Comment" placeholder="Your comment" />
    HTML;

    public string $simpleExample = <<<HTML
    <x-textarea label="Annotations" placeholder="write your annotations" />
    HTML;

    public function render()
    {
        return view('livewire.documentation.textarea')->layout(Documentation::class);
    }
}
