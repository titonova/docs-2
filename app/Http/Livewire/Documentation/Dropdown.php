<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Dropdown extends Component
{
    public string $simpleDropdown = <<<HTML
    <x-dropdown>
        <x-dropdown.item label="Settings" />
        <x-dropdown.item label="My Profile" />
        <x-dropdown.item label="Logout" />
    </x-dropdown>
    HTML;

    public string $headerDropdown = <<<HTML
    <x-dropdown>
        <x-dropdown.header label="Settings">
            <x-dropdown.item label="Preferences" />
            <x-dropdown.item label="My Profile" />
        </x-dropdown.header>

        <x-dropdown.item label="Logout" />
    </x-dropdown>
    HTML;

    public string $separatorDropdown = <<<HTML
    <x-dropdown>
        <x-dropdown.header label="Settings">
            <x-dropdown.item label="Preferences" />
            <x-dropdown.item label="My Profile" />
        </x-dropdown.header>

        <x-dropdown.item separator label="Help Center" />
        <x-dropdown.item label="Live Chat" />
        <x-dropdown.item label="Logout" />
    </x-dropdown>
    HTML;

    public string $iconDropdown = <<<HTML
    <x-dropdown>
        <x-dropdown.header label="Settings">
            <x-dropdown.item icon="cog" label="Preferences" />
            <x-dropdown.item icon="user" label="My Profile" />
        </x-dropdown.header>

        <x-dropdown.item separator label="Help Center" />
        <x-dropdown.item label="Live Chat" />
        <x-dropdown.item label="Logout" />
    </x-dropdown>
    HTML;

    public string $triggerSlot = <<<HTML
    <x-dropdown>
        <x-slot name="trigger">
            <x-button label="Options" primary />
        </x-slot>

        <x-dropdown.item label="Help Center" />
        <x-dropdown.item separator label="Live Chat" />
        <x-dropdown.item separator label="Logout" />
    </x-dropdown>
    HTML;

    public string $itemSlot = <<<HTML
    <x-dropdown>
        <x-dropdown.item>
            <b>Help Center</b>
        </x-dropdown.item>
        <x-dropdown.item separator>
            <b>Live Chat</b>
        </x-dropdown.item>
        <x-dropdown.item separator>
            <b>Logout</b>
        </x-dropdown.item>
    </x-dropdown>
    HTML;

    public function render()
    {
        return view('livewire.documentation.dropdown')->layout(Documentation::class);
    }
}
