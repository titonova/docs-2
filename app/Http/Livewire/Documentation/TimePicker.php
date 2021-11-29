<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class TimePicker extends Component
{
    public ?string $timePicker = null;

    public string $amPmExample = <<<HTML
    <x-time-picker
        label="AM/PM"
        placeholder="12:00 AM"
        wire:model.defer="timePicker"
    />
    HTML;

    public string $time24hExample = <<<HTML
    <x-time-picker
        label="24 Hours"
        placeholder="22:30"
        format="24"
        wire:model.defer="timePicker"
    />
    HTML;

    public string $customInterval = <<<HTML
    <x-time-picker
        label="AM/PM"
        placeholder="12:00 AM"
        interval="30"
        wire:model.defer="timePicker"
    />
    HTML;

    public function render()
    {
        return view('livewire.documentation.time-picker')->layout(Documentation::class);
    }
}
