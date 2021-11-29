<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class MaskableInput extends Component
{
    public string $simpleMaskExample = <<<HTML
    <x-inputs.maskable
        label="Maskable Input"
        mask="(###) ###-####"
        placeholder="Phone number"
    />
    HTML;

    public string $multipleMaskExample = <<<HTML
    <x-inputs.maskable
        label="Maskable Input"
        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
        placeholder="Phone number"
    />
    HTML;

    public string $maskAnythingExample = <<<HTML
    <x-inputs.maskable
        label="Mask Anything"
        mask="##.SS.A.a-##"
        placeholder="12.aB.C.d-34"
    />
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

    public $maskable = null;

    public function render()
    {
        return view('livewire.documentation.maskable-input')->layout(Documentation::class);
    }
}
