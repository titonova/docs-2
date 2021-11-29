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
        return collect([[
            'header'    => 'Getting Started',
            'label'     => 'Installation',
            'route'     => route('docs.get-started'),
        ], [
            'label'     => 'Changelog',
            'route'     => route('docs.changelog'),
        ], [
            'label'     => 'Colors Customization',
            'route'     => route('docs.colors'),
        ], [
            'label'     => 'Customizations',
            'route'     => route('docs.customization'),
        ], [
            'label'     => 'Contribution Guide',
            'route'     => route('docs.contributing'),
        ], [
            'header'    => 'Form Components',
            'label'     => 'Inputs',
            'route'     => route('docs.inputs'),
        ], [
            'label'     => 'Errors',
            'route'     => route('docs.errors'),
        ], [
            'label'     => 'Textarea',
            'route'     => route('docs.textarea'),
        ], [
            'label'     => 'Maskable Inputs',
            'route'     => route('docs.maskable-inputs'),
        ], [
            'label'     => 'Phone Input',
            'route'     => route('docs.phone-input'),
        ], [
            'label'     => 'Currency Input',
            'route'     => route('docs.currency-input'),
        ], [
            'label'     => 'Toggle',
            'route'     => route('docs.toggle'),
        ], [
            'label'     => 'Checkbox',
            'route'     => route('docs.checkbox'),
        ], [
            'label'     => 'Radio',
            'route'     => route('docs.radio'),
        ], [
            'label'     => 'Buttons',
            'route'     => route('docs.buttons'),
        ], [
            'label'     => 'Datetime Picker',
            'route'     => route('docs.datetime-picker'),
        ], [
            'label'     => 'Time Picker',
            'route'     => route('docs.time-picker'),
        ], [
            'label'     => 'Native Select',
            'route'     => route('docs.native-select'),
        ], [
            'label'     => 'Select',
            'route'     => route('docs.select'),
        ], [
            'header'    => 'Table',
            'label'     => 'Power Grid',
            'route'     => 'https://github.com/Power-Components/livewire-powergrid',
            'target'    => '_blank',
        ], [
            'header'    => 'Actions',
            'label'     => 'Notifications',
            'route'     => route('docs.notifications'),
        ], [
            'label'     => 'Dialogs',
            'route'     => route('docs.dialogs'),
        ], [
            'label'     => 'Hooks',
            'route'     => route('docs.hooks'),
        ], [
            'header'    => 'UI Components',
            'label'     => 'Icons',
            'route'     => route('docs.heroicons'),
        ], [
            'label'     => 'Dropdown',
            'route'     => route('docs.dropdown'),
        ], [
            'label'     => 'Cards',
            'route'     => route('docs.cards'),
        ], [
            'label'     => 'Modal',
            'route'     => route('docs.modal'),
        ]])->map(function (array $link) {
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
