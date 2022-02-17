<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitchVersion extends Component
{
    public const VERSIONS = [
        'v1' => 'https://livewire-wireui.com',
        'v0' => 'https://v0.livewire-wireui.com',
    ];

    public string $currentVersion;

    public string $path;

    public function mount()
    {
        $this->currentVersion = config('app.url');

        $this->path = request()->path();
    }

    public function updatedCurrentVersion(): void
    {
        redirect()->to("{$this->currentVersion}/{$this->path}");
    }

    public function render()
    {
        return view('livewire.switch-version');
    }
}
