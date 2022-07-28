<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Documentation extends Component
{
    public array $sidebarMenu = [];

    public function __construct()
    {
        $this->sidebarMenu = $this->getSidebarMenu();
    }

    public function getSidebarMenu(): array
    {
        return collect([
            [
                'header' => 'Getting Started',
                'label'  => 'Installation',
                'route'  => route('docs.get-started'),
            ],
            [
                'label' => 'CSS Utilities',
                'route' => route('docs.css-utilities'),
            ],
            [
                'label' => 'Troubleshooting',
                'route' => route('docs.troubleshooting'),
            ],
            [
                'header' => 'Form Components',
                'label'  => 'Inputs',
                'route'  => route('docs.inputs'),
            ],
            [
                'label' => 'Textarea',
                'route' => route('docs.textarea'),
            ],
            [
                'label' => 'Native Select',
                'route' => route('docs.native-select'),
            ],
            [
                'label' => 'Select',
                'route' => route('docs.select'),
            ],
            [
                'label' => 'Color Picker',
                'route' => route('docs.color-picker'),
            ],
            [
                'label' => 'Errors',
                'route' => route('docs.errors'),
            ],
            [
                'label' => 'Cards',
                'route' => route('docs.cards'),
            ],
            [
                'label' => 'Buttons',
                'route' => route('docs.buttons'),
            ],
            [
                'label' => 'Toggle',
                'route' => route('docs.toggle'),
            ],
            [
                'label' => 'Checkbox',
                'route' => route('docs.checkbox'),
            ],
            [
                'label' => 'Radio',
                'route' => route('docs.radio'),
            ],
            [
                'header' => 'Table',
                'label'  => 'PowerGrid',
                'route'  => 'https://github.com/Power-Components/livewire-powergrid',
                'target' => '_blank',
            ],
            [
                'header' => 'Livewire components',
                'label'  => 'Usage',
                'route'  => route('docs.livewire-usage'),
            ],
            [
                'label' => 'Maskable Inputs',
                'route' => route('docs.maskable-inputs'),
            ],
            [
                'label' => 'Currency Input',
                'route' => route('docs.currency-input'),
            ],
            [
                'label' => 'Datetime Picker',
                'route' => route('docs.datetime-picker'),
            ],
            [
                'label' => 'Time Picker',
                'route' => route('docs.time-picker'),
            ],
            [
                'label' => 'Phone Input',
                'route' => route('docs.phone-input'),
            ],
            [
                'header' => 'Actions',
                'label'  => 'Notifications',
                'route'  => route('docs.notifications'),
            ],
            [
                'label' => 'Dialogs',
                'route' => route('docs.dialogs'),
            ],
            [
                'label' => 'Hooks',
                'route' => route('docs.hooks'),
            ],
            [
                'header' => 'UI Components',
                'label'  => 'Icons',
                'route'  => route('docs.heroicons'),
            ],
            [
                'label' => 'Avatar',
                'route' => route('docs.avatar'),
            ],
            [
                'label' => 'Dropdown',
                'route' => route('docs.dropdown'),
            ],
            [
                'label' => 'Modal',
                'route' => route('docs.modal'),
            ],

            /***************** ********************/
            [
                'header' => 'Customize',
                'label'  => 'Colors',
                'route'  => route('docs.colors'),
            ],
            [
                'label' => 'Components',
                'route' => route('docs.customization'),
            ],
            [
                'label' => 'Contribution Guide',
                'route' => route('docs.contributing'),
            ],
        ])->map(function (array $link) {
            $route = data_get($link, 'route');

            data_set($link, 'active', request()->url() === $route);

            return $link;
        })->toArray();
    }

    public function render()
    {
        return view('layouts.documentation');
    }
}
