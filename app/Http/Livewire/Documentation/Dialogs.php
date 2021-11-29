<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Dialogs extends Component
{
    public string $addComponentExample = <<<HTML
    <html>
        <body>
            <x-dialog />
            or
            <x-dialog z-index="z-50" blur="md" align="center" />
            ...
        </body>
    </html>
    HTML;

    public string $javascriptExample = <<<JS
    window.\$wireui.dialog({
        title: 'Profile saved!',
        description: 'Your profile was successfull saved',
        icon: 'success'
    })
    JS;

    public string $javascriptConfirmExample = <<<JS
    window.\$wireui.confirmDialog({
        title: 'Are you Sure?',
        description: 'Save the information?',
        icon: 'question',
        accept: {
            label: 'Yes, save it',
            method: 'save',
            params: 'Saved'
        },
        reject: {
            label: 'No, cancel',
            method: 'cancel'
        }
    }, livewireComponentId)
    JS;

    public string $confirmDirectiveAlpineJs = <<<HTML
    <div x-data="{ title: 'Sure Delete?' }">
        <x-button label="Delete"
            x-on:confirm="{
                title,
                icon: 'warning',
                method: 'delete',
                params: 1
            }"
        />
    </div>
    HTML;

    public string $confirmDirectiveHtml = <<<HTML
    <x-button label="Delete"
        x-on:confirm="{
            title: 'Sure Delete?',
            icon: 'warning',
            method: 'delete',
            params: 1
        }"
    />
    HTML;

    public string $livewireConfirmExample = <<<EOT
    <?php

    namespace App\Http\Livewire;

    use Livewire\Component;
    use WireUi\Traits\Actions;

    class MyComponent extends Component
    {
        use Actions;

        ...

        public function save(): void
        {
            // use a simple syntax
            \$this->dialog()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'Save the information?',
                'acceptLabel' => 'Yes, save it',
                'method'      => 'save',
                'params'      => 'Saved',
            ]);

            // use a full syntax
            \$this->dialog()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'Save the information?',
                'icon'        => 'question',
                'accept'      => [
                    'label'  => 'Yes, save it',
                    'method' => 'save',
                    'params' => 'Saved',
                ],
                'reject' => [
                    'label'  => 'No, cancel',
                    'method' => 'cancel',
                ],
            ]);
        }
    }
    EOT;

    public string $livewireExample = <<<EOT
    <?php

    namespace App\Http\Livewire;

    use Livewire\Component;
    use WireUi\Traits\Actions;

    class MyComponent extends Component
    {
        use Actions;

        ...

        public function save(): void
        {
            ...
            // use a simple syntax: success | error | warning | info
            \$this->dialog()->success(
                \$title = 'Profile saved',
                \$description = 'Your profile was successfull saved'
            );
            \$this->dialog()->error(
                \$title = 'Error !!!',
                \$description = 'Your profile was not saved'
            );

            // or use a full syntax
            \$this->dialog()->show([
                'title'       => 'Profile saved!',
                'description' => 'Your profile was successfull saved',
                'icon'        => 'success'
            ]);
        }
    }
    EOT;

    public string $phpEventsExample = <<<EOT
    <?php

    namespace App\Http\Livewire;

    use Livewire\Component;
    use WireUi\Traits\Actions;

    class MyComponent extends Component
    {
        use Actions;

        ...

        public function save(): void
        {
            ...
            \$this->dialog()->show([
                ...

                'onClose' => [
                    'method' => 'firedEvent',
                    'params' => 'onClose',
                ],
                'onDismiss' => [
                    'method' => 'firedEvent',
                    'params' => ['event' => 'onDismiss'],
                ],
                'onTimeout' => [
                    'method' => 'firedEvent',
                    'params' => ['onTimeout', 'more value'],
                ],
            ]);
        }
    }
    EOT;

    public string $customConfirmDialog = <<<HTML
    <x-dialog id="custom" title="User information" description="Complete your profile, give your name">
        <x-input label="What's your name?" placeholder="your name bro" x-model="name" />
    </x-dialog>
    HTML;

    public function render()
    {
        return view('livewire.documentation.dialogs')->layout(Documentation::class);
    }
}
