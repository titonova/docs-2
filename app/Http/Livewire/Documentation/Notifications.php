<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;
use WireUi\Traits\Actions;

class Notifications extends Component
{
    use Actions;

    public string $addComponentNotificationExample = <<<HTML
    <html>
        <body>
            <x-notifications />
            or
            <x-notifications z-index="z-50" />
            ...
        </body>
    </html>
    HTML;

    public string $javascriptNotificationExample = <<<JS
    window.\$wireui.notify({
        title: 'Profile saved!',
        description: 'Your profile was successfull saved',
        icon: 'success'
    })
    JS;

    public string $livewireNotificationExample = <<<EOT
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
            \$this->notification()->success(
                \$title = 'Profile saved',
                \$description = 'Your profile was successfull saved'
            );
            \$this->notification()->error(
                \$title = 'Error !!!',
                \$description = 'Your profile was not saved'
            );

            // or use a full syntax
            \$this->notification([
                'title'       => 'Profile saved!',
                'description' => 'Your profile was successfull saved',
                'icon'        => 'success'
            ]);
            \$this->notification()->send([
                'title'       => 'Profile saved!',
                'description' => 'Your profile was successfull saved',
                'icon'        => 'success'
            ]);
        }
    }
    EOT;

    public string $bladeConfirmExample = <<<HTML
    <button onclick="window.\$wireui.confirmNotification({
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
    })">
        Save Information
    </button>
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
            \$this->notification()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'Save the information?',
                'acceptLabel' => 'Yes, save it',
                'method'      => 'save',
                'params'      => 'Saved',
            ]);

            // use a full syntax
            \$this->notification()->confirm([
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

    public string $javascriptConfirmExample = <<<JS
    window.\$wireui.confirmNotification({
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
            \$this->notification([
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

    public function render()
    {
        return view('livewire.documentation.notifications')->layout(Documentation::class);
    }
}
