<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PasswordInput extends Component
{
    public string $passwordExample = <<<HTML
    <x-inputs.password label="Secret 🙈" value="I love WireUI ❤️" />
    HTML;

    public function render(): View
    {
        return view('livewire.documentation.password-input')->layout(Documentation::class);
    }
}
