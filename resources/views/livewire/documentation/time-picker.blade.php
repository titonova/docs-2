<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#time-picker" label="Time Picker">
                <x-summary.item href="#am-pm" label="AM/PM Time Picker" />
                <x-summary.item href="#24-hours" label="24H Time Picker" />
                <x-summary.item href="#custom-interval" label="Custom Interval" />
            </x-summary.header>

            <x-summary.header href="#time-picker-options" label="Time Picker Options" />
        </x-summary>
    </x-slot>

    <div id="time-picker">
        <x-section.title title="Time Picker" />
        <div class="mt-5 prose max-w-none xl:mb-8 text-gray-500 dark:text-gray-400">
            <p>
                The Time Picker component is able to change time in datetime, or change only time.
            </p>
        </div>

        <x-alerts.warning>
            If you are using a model property bind <b>(wire:model="appointment.datetime")</b>
            as datetime, must set model as <b>.defer</b> because datetime <b>cannot have empty time</b>,
            and automatically set 00:00 to time
        </x-alerts.warning>
    </div>

    <x-code-preview
        title="AM/PM Time Picker"
        href="#am-pm"
        id="am-pm"
        language="html"
        :code="$amPmExample">
        <div class="flex justify-center">
            <div class="sm:max-w-xs sm:px-16">
                <x-time-picker id="am-pm-time" label="AM/PM" placeholder="12:00 AM" wire:model.defer="timePicker" />
            </div>
        </div>
    </x-code-preview>

    <x-code-preview
        title="24H Time Picker"
        href="#24-hours"
        id="24-hours"
        language="html"
        :code="$time24hExample">
        <div class="flex justify-center">
            <div class="sm:max-w-xs sm:px-16">
                <x-time-picker id="24-hours" label="24 Hours" placeholder="22:30" format="24" wire:model.defer="timePicker" />
            </div>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Custom Interval"
        href="#custom-interval"
        id="custom-interval"
        language="html"
        :code="$customInterval">
        <div class="flex justify-center">
            <div class="sm:max-w-xs sm:px-16">
                <x-time-picker id="interval" label="AM/PM" placeholder="12:00 AM" interval="30" wire:model.defer="timePicker" />
            </div>
        </div>
    </x-code-preview>

    <div id="time-picker-options">
        <x-section.title href="#time-picker-options" title="Time Picker Options" />
        <x-options-table class="mt-2 mb-6 w-full">
            <x-option-table-row prop="interval" required="false" default="10" type="string|number" available="--" />
            <x-option-table-row prop="format"   required="false" default="12" type="string" available="12|24" />
        </x-options-table>
    </div>
</div>
