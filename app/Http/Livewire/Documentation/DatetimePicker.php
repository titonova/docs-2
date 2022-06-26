<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class DatetimePicker extends Component
{
    public ?string $normalPicker = null;

    public string $normalPickerExample = <<<HTML
    <x-datetime-picker
        label="Appointment Date"
        placeholder="Appointment Date"
        wire:model.defer="normalPicker"
    />
    HTML;

    public ?string $customFormat = '12-05-2021 13:40';

    public string $customFormatExample = <<<HTML
    <x-datetime-picker
        label="Appointment Date"
        placeholder="Appointment Date"
        parse-format="DD-MM-YYYY HH:mm"
        wire:model.defer="customFormat"
    />
    HTML;

    public ?string $displayFormat = '';

    public string $displayFormatExample = <<<HTML
    <x-datetime-picker
        label="Appointment Date"
        placeholder="Appointment Date"
        display-format="DD-MM-YYYY HH:mm"
        wire:model.defer="displayFormat"
    />
    HTML;

    public ?string $withoutTimezone = '';

    public string $withoutTimezoneExample = <<<HTML
    <x-datetime-picker
        without-timezone
        label="Appointment Date"
        placeholder="Appointment Date"
        wire:model="withoutTimezone"
    />
    HTML;

    public ?string $mixAndMaxDates = null;

    public string $mixAndMaxDatesExample = <<<HTML
    <x-datetime-picker
        label="Appointment Date"
        placeholder="Appointment Date"
        wire:model="model"
        :min="now()->subDays(7)->hours(12)->minutes(30)"
        :max="now()->addDays(7)->hours(12)->minutes(30)"
    />
    HTML;

    public ?string $mixAndMaxTimes = null;

    public string $mixAndMaxTimesExample = <<<HTML
    <x-datetime-picker
        id="min-max-times-input"
        without-timezone
        label="Appointment Date"
        placeholder="Appointment Date"
        wire:model.defer="mixAndMaxTimes"
        min-time="08:00"
        max-time="18:00"
    />
    HTML;

    public function render()
    {
        return view('livewire.documentation.datetime-picker')->layout(Documentation::class);
    }
}
