<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class PhoneInput extends Component
{
    public string $defaultExample = <<<HTML
    <x-inputs.phone label="Phone" />
    HTML;

    public string $customMaskExample = <<<HTML
    <x-inputs.phone label="Phone" mask="['(##) ####-####', '(##) #####-####']" />
    HTML;

    public string $customInputExample = <<<EOT
    <?php

    namespace App\View\Components;

    use WireUi\View\Components\Inputs\BaseMaskable;

    class CustomMaskableInput extends BaseMaskable
    {
        protected function getInputMask(): string
        {
            return "['(##) ####-####', '(##) #####-####']";
        }
    }
    EOT;

    public $phone;

    public function render()
    {
        return view('livewire.documentation.phone-input')->layout(Documentation::class);
    }
}
