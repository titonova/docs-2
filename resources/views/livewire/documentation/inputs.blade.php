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

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500 dark:text-gray-400">
            <p>
                The input component helps with forms.
                When a <b>wire:model</b> is passed and the <b>id</b> or <b>name</b> attribute is not passed,
                the <b>id</b> receives an <b>md5</b> of the <b>model</b>, and the <b>name</b> receives the exact <b>model</b>.
            </p>
        </div>
    </div>

    <div class="space-y-4">
        <x-code-preview
            title="Simple Input"
            href="#simple-input"
            id="simple-input"
            language="blade"
            :code="$simpleInputExample">
            <div class="mx-auto max-w-sm">
                <x-input label="Name" placeholder="your name" />
            </div>
        </x-code-preview>

        <div class="rounded-lg border dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <x-icon name="information-circle" class="h-5 w-5 text-blue-400" />
                </div>
                <div class="ml-3 flex-1 md:flex md:justify-between">
                    <p class="text-sm text-blue-700 dark:text-blue-400">
                        Tip: You can use <b>error</b> component to show error message
                    </p>
                </div>
            </div>
        </div>

        <x-code language="blade" :code='<<<EOT
        <x-error name="model" />
        EOT' />
    </div>

    <x-code-preview
        title="Input Hint"
        href="#input-hint"
        id="input-hint"
        language="blade"
        :code="$hintInputExample">
        <div class="mx-auto max-w-sm">
            <x-input label="Name" placeholder="your name" hint="Inform your full name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Corner Hint"
        href="#input-corner-hint"
        id="input-corner-hint"
        language="blade"
        :code="$cornerHintInputExample">
        <div class="mx-auto max-w-sm">
            <x-input label="Name" placeholder="your name" corner-hint="Ex: John" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Icon"
        href="#input-icon"
        id="input-icon"
        language="blade"
        :code="$iconInputExample">
        <div class="mx-auto max-w-sm">
            <x-input icon="user" label="Name" placeholder="your name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Right Icon"
        href="#input-right-icon"
        id="input-right-icon"
        language="blade"
        :code="$rightIconInputExample">
        <div class="mx-auto max-w-sm">
            <x-input right-icon="user" label="Name" placeholder="your name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Two Icons Input"
        href="#two-icons-input"
        id="two-icons-input"
        language="blade"
        :code="$twoIconsInputExample">
        <div class="mx-auto max-w-sm">
            <x-input icon="user" right-icon="pencil" label="Name" placeholder="your name" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Prefix"
        href="#input-prefix"
        id="input-prefix"
        language="blade"
        :code="$prefixInputExample">
        <div class="mx-auto max-w-sm">
            <x-input label="Name" placeholder="your name" prefix="$" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Suffix"
        href="#input-suffix"
        id="input-suffix"
        language="blade"
        :code="$suffixInputExample">
        <div class="mx-auto max-w-sm">
            <x-input class="pr-28" label="Email" placeholder="your email" suffix="@mail.com" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Input Prepend"
        href="#input-prepend"
        id="input-prepend"
        language="blade"
        :code="$prependInputExample">
        <div class="mx-auto max-w-sm">
            <x-input label="Name" placeholder="your name" class="pl-12">
                <x-slot name="prepend">
                    <div class="absolute inset-y-0 left-0 flex items-center p-0.5">
                        <x-button
                            class="rounded-l-md h-full"
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
        <div class="mx-auto max-w-sm">
            <x-input label="Name" placeholder="your name">
                <x-slot name="append">
                    <div class="absolute inset-y-0 right-0 flex items-center p-0.5">
                        <x-button
                            class="rounded-r-md h-full"
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
        <x-options-table class="mt-2 mb-6 w-full" :available="false">
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
