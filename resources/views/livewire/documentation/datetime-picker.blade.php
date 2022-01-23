<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#datetime-picker" label="Datetime Picker">
                <x-summary.item href="#default" label="Default Datetime Picker" />
                <x-summary.item href="#custom-format" label="Custom Datetime Format" />
                <x-summary.item href="#display-format" label="Custom Display Format" />
                <x-summary.item href="#without-timezone" label="Without Timezone" />
                <x-summary.item href="#min-max-dates" label="Min & Max dates" />
            </x-summary.header>

            <x-summary.header href="#datetime-picker-options" label="Datetime Picker Options" />
        </x-summary>
    </x-slot>

    <div id="datetime-picker">
        <x-section.title title="Datetime Picker" />
        <div class="mt-5 prose max-w-none xl:mb-8 text-gray-500">
            <p>
                The Datetime Picker component is able to change date and time using timezones or ignoring timezone diff.
                You can use automatic timezone or set a custom timezone to System Timezone or User Timezone
            </p>
        </div>
    </div>

    <x-code-preview
        title="Default Datetime Picker"
        href="#default"
        id="default"
        language="html"
        :code="$normalPickerExample">
        <div class="flex justify-center">
            <div class="sm:max-w-md sm:px-16">
                <span class="dark:text-gray-400">Model: {{ $normalPicker }}</span>
                <x-datetime-picker
                    id="normalPicker"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    wire:model="normalPicker"
                />
            </div>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Custom Datetime Format"
        href="#custom-format"
        id="custom-format"
        language="html"
        :code="$customFormatExample">
        <div class="flex justify-center">
            <div class="sm:max-w-md sm:px-16">
                <span class="dark:text-gray-400">Model: {{ $customFormat }}</span>
                <x-datetime-picker
                    id="customFormat"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    parse-format="DD-MM-YYYY HH:mm"
                    wire:model="customFormat"
                />
            </div>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Custom Display Format"
        href="#display-format"
        id="display-format"
        language="html"
        :code="$displayFormatExample">
        <div class="flex justify-center">
            <div class="sm:max-w-md sm:px-16">
                <span class="dark:text-gray-400">Model: {{ $displayFormat }}</span>
                <x-datetime-picker
                    id="displayFormat"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    display-format="DD-MM-YYYY HH:mm"
                    wire:model="displayFormat"
                />
            </div>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Without Timezone"
        href="#without-timezone"
        id="without-timezone"
        language="html"
        :code="$withoutTimezoneExample">
        <div class="flex justify-center">
            <div class="sm:max-w-md sm:px-16">
                <span class="dark:text-gray-400">Model: {{ $withoutTimezone }}</span>
                <x-datetime-picker
                    id="withoutTimezone"
                    without-timezone
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    wire:model="withoutTimezone"
                />
            </div>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Min & Max dates"
        href="#min-max-dates"
        id="min-max-dates"
        language="html"
        :code="$mixAndMaxDatesExample">
        <div class="flex justify-center">
            <div class="sm:max-w-md sm:px-16">
                <ul class="dark:text-gray-400 mb-2">
                    <li>
                        <b>System Time:</b> {{ now() }} {{ now()->timezoneName }}
                    </li>

                    <li>
                        <b>Min date:</b> now() - 7 days, 12:30 PM
                    </li>

                    <li>
                        <b>Max date:</b> now() + 7 days, 12:30 PM
                    </li>

                    <li>
                        <b>Model:</b> {{ $mixAndMaxDates }}
                    </li>
                </ul>

                <x-datetime-picker
                    id="min-max-dates-input"
                    without-timezone
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    wire:model="mixAndMaxDates"
                    :min="now()->subDays(7)->hours(12)->minutes(30)"
                    :max="now()->addDays(7)->hours(12)->minutes(30)"
                />
            </div>
        </div>
    </x-code-preview>

    <div id="datetime-picker-options">
        <x-section.title href="#datetime-picker-options" title="Datetime Picker Options" />
        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The datetime picker accepts all
                <a class="dark:text-primary-500" href="{{ route('docs.inputs') }}#input-options">input</a>
                options and slots
            </p>
        </div>

        <x-options-table class="mt-2 mb-6 w-full">
            <x-option-table-row prop="without-tips"     required="false" default="false" type="boolean" available="--" />
            <x-option-table-row prop="without-timezone" required="false" default="false" type="boolean" available="--" />
            <x-option-table-row prop="without-time"     required="false" default="false" type="boolean" available="--" />
            <x-option-table-row prop="interval"         required="false" default="10" type="string|number" available="--" />
            <x-option-table-row prop="time-format"      required="false" default="12" type="string"        available="12|24" />
            <x-option-table-row prop="timezone"         required="false" default="UTC" type="string" available="All js available timezones" />
            <x-option-table-row prop="user-timezone"    required="false" default="real user timezone" type="string" available="All js available timezones" />
            <x-option-table-row prop="parse-format"     required="false" default="ISO8601" type="string" available="All dayjs formats" />
            <x-option-table-row prop="display-format"   required="false" default="localeFormat" type="string" available="All dayjs formats" />
            <x-option-table-row prop="min"              required="false" default="null" type="Carbon|DateTimeInterface|string|timestamp|null" available="All Suported Carbon::parse dates" />
            <x-option-table-row prop="max"              required="false" default="null" type="Carbon|DateTimeInterface|string|timestamp|null" available="All Suported Carbon::parse dates" />
        </x-options-table>

        <a href="https://day.js.org/docs/en/display/format">Dayjs formats</a>
    </div>
</div>
