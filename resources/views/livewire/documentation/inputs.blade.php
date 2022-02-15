<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#inputs" label="Inputs">
                <x-summary.item href="#simple-input" label="Simple Input" />
                <x-summary.item href="#input-hint" label="Input Hint" />
                <x-summary.item href="#input-corner-hint" label="Input Corner Hint" />
                <x-summary.item href="#input-icon" label="Input Icon" />
                <x-summary.item href="#input-right-icon" label="Input Right Icon" />
                <x-summary.item href="#two-icons-input" label="Two Icons Input" />
                <x-summary.item href="#input-prefix" label="Input Prefix" />
                <x-summary.item href="#input-suffix" label="Input Suffix" />
                <x-summary.item href="#input-prepend" label="Input Prepend" />
                <x-summary.item href="#input-append" label="Input Append" />
            </x-summary.header>

            <x-summary.header href="#input-options" label="Inputs Options" />
        </x-summary>
    </x-slot>

    <div>
        <x-section.title title="Inputs" />

        <div class="mt-5 prose text-gray-500 xl:max-w-4xl xl:mb-8 dark:text-gray-400">
            <p>
                The Input component is very useful to build forms.

            </p>
            <p>
            You can set the attribute <x-mark>wire:model</x-mark> to automatically have the attributes <x-mark>id</x-mark> set to the MD5 of the model and <x-mark>name</x-mark> to the exact model. You must NOT pass the attributes id and name for this to work.
            </p>
            <x-code :line-numbers="false" language="html" :contents="$wireModelExample" />
        </div>
    </div>

    <x-alerts.info>
        Tip: You can use the
        <a class="text-indigo-700 underline" href="{{ route('docs.errors') }}#input-options">Errors component</a>
        to display validation error messages for your input.
    </x-alerts.info>

    <div class="space-y-4">
        <x-code-preview
            title="Simple Input"
            href="#simple-input"
            id="simple-input"
            language="blade"
            :code="$simpleInputExample">
            <div class="max-w-sm mx-auto">
                <x-input label="Name" placeholder="your name" />
            </div>
        </x-code-preview>
    </div>

    <x-code-preview
        title="Input Hint"
        href="#input-hint"
        id="input-hint"
        language="blade"
        :code="$hintInputExample">
        <div class="max-w-sm mx-auto">
            <x-input label="Name" placeholder="your name" hint="Inform your full name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Corner Hint"
        href="#input-corner-hint"
        id="input-corner-hint"
        language="blade"
        :code="$cornerHintInputExample">
        <div class="max-w-sm mx-auto">
            <x-input label="Name" placeholder="your name" corner-hint="Ex: John" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Icon"
        href="#input-icon"
        id="input-icon"
        language="blade"
        :code="$iconInputExample">
        <div class="max-w-sm mx-auto">
            <x-input icon="user" label="Name" placeholder="your name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Right Icon"
        href="#input-right-icon"
        id="input-right-icon"
        language="blade"
        :code="$rightIconInputExample">
        <div class="max-w-sm mx-auto">
            <x-input right-icon="user" label="Name" placeholder="your name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Two Icons Input"
        href="#two-icons-input"
        id="two-icons-input"
        language="blade"
        :code="$twoIconsInputExample">
        <div class="max-w-sm mx-auto">
            <x-input icon="user" right-icon="pencil" label="Name" placeholder="your name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Prefix"
        href="#input-prefix"
        id="input-prefix"
        language="blade"
        :code="$prefixInputExample">
        <div class="max-w-sm mx-auto">
            <x-input class="!pl-[6.5rem]" label="Website" placeholder="your-website.com" prefix="https://www." />
        </div>
    </x-code-preview>

    <x-alerts.info>
        Tip: You can use <b>pl-x</b> class to control the left padding on your input.
    </x-alerts.info>

    <x-code-preview
        title="Input Suffix"
        href="#input-suffix"
        id="input-suffix"
        language="blade"
        :code="$suffixInputExample">
        <div class="max-w-sm mx-auto">
            <x-input class="pr-28" label="Email" placeholder="your email" suffix="@mail.com" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Prepend"
        href="#input-prepend"
        id="input-prepend"
        language="blade"
        :code="$prependInputExample">
        <div class="max-w-sm mx-auto">
            <x-input label="Name" placeholder="your name" class="pl-12">
                <x-slot name="prepend">
                    <div class="absolute inset-y-0 left-0 flex items-center p-0.5">
                        <x-button
                            class="h-full rounded-l-md"
                            icon="sort-ascending"
                            primary
                            flat
                            squared
                        />
                    </div>
                </x-slot>
            </x-input>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Append"
        href="#input-append"
        id="input-append"
        language="blade"
        :code="$appendInputExample">
        <div class="max-w-sm mx-auto">
            <x-input label="Name" placeholder="your name">
                <x-slot name="append">
                    <div class="absolute inset-y-0 right-0 flex items-center p-0.5">
                        <x-button
                            class="h-full rounded-r-md"
                            icon="sort-ascending"
                            primary
                            flat
                            squared
                        />
                    </div>
                </x-slot>
            </x-input>
        </div>
    </x-code-preview>

    <div id="input-options">
        <x-section.title href="#input-options" title="Input Options" />
        <x-options-table class="w-full mt-2 mb-6" :available="false">
            <x-option-table-row prop="label"      required="false" default="none" type="string" />
            <x-option-table-row prop="hint"       required="false" default="none" type="string" />
            <x-option-table-row prop="cornerHint" required="false" default="none" type="string" />
            <x-option-table-row prop="icon"       required="false" default="none" type="string" />
            <x-option-table-row prop="rightIcon"  required="false" default="none" type="string" />
            <x-option-table-row prop="prefix"     required="false" default="none" type="string" />
            <x-option-table-row prop="suffix"     required="false" default="none" type="string" />
            <x-option-table-row prop="prepend"    required="false" default="none" type="slot"   />
            <x-option-table-row prop="append"     required="false" default="none" type="slot"   />
        </x-options-table>
    </div>
</div>
