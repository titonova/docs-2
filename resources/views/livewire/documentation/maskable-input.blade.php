<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#maskable-inputs" label="Maskable Inputs">
                <x-summary.item href="#mask-tokens" label="Mask Tokens" />
                <x-summary.item href="#simple-mask" label="Simple Mask" />
                <x-summary.item href="#multiple-mask" label="Multiple Mask" />
                <x-summary.item href="#mask-anything" label="Mask Anything" />
                <x-summary.item href="#create-custom-input" label="Create a Custom Input" />
            </x-summary.header>

            <x-summary.header href="#input-options" label="Inputs Options" />
        </x-summary>
    </x-slot>

    <div id="maskable-inputs">
        <x-section.title title="Maskable Inputs" href="#maskable-inputs" />
        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The maskable input helps us when we need an input pattern, like phone, ID, email and whatever.
                It's possible to make any pattern. See possible tokens.
                Mask everything!
            </p>
        </div>
    </div>

    <div id="mask-tokens">
        <x-section.title title="Mask Tokens" href="#mask-tokens" />
        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                Know the Tokens
            </p>
            <ul>
                <li>Token <b>#</b> is Numeric</li>
                <li>Token <b>X</b> is Alphanumeric</li>
                <li>Token <b>S</b> is Alpha</li>
                <li>Token <b>A</b> is Alpha forcing UPPERCASE</li>
                <li>Token <b>a</b> is Alpha forcing lowercase</li>
                <li>Token <b>H</b> is 24 hours pattern</li>
                <li>Token <b>h</b> is 12 hours pattern</li>
                <li>Token <b>m</b> is minutes pattern</li>
                <li>Token <b>!</b> is Escape</li>
            </ul>
        </div>

        <x-code language="js">
            {
                '#': { pattern: /\d/ },
                'X': { pattern: /[0-9a-zA-Z]/ },
                'S': { pattern: /[a-zA-Z]/ },
                'A': { pattern: /[a-zA-Z]/, transform: (v: string): string => v.toLocaleUpperCase() },
                'a': { pattern: /[a-zA-Z]/, transform: (v: string): string => v.toLocaleLowerCase() },
                'H': { pattern: /([01][0-9])|(2[0-3])/ },
                'h': { pattern: /[1-9]|1[0-2]/ },
                'm': { pattern: /[0-5][0-9]/ },
                '!': { escape: true }
            }
        </x-code>
    </div>

    <x-code-preview
        title="Simple Mask"
        href="#simple-mask"
        id="simple-mask"
        language="html"
        :code="$simpleMaskExample">
        <div class="mx-auto max-w-sm">
            <x-inputs.maskable id="simple-mask" wire:model.defer="maskable" label="Maskable Input" mask="(###) ###-####" placeholder="Phone number" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Multiple Mask"
        href="#multiple-mask"
        id="multiple-mask"
        language="html"
        :code="$multipleMaskExample">
        <div class="mx-auto max-w-sm">
            <x-inputs.maskable
                id="multiple-mask"
                wire:model.defer="maskable"
                label="Multiple Maskable Input"
                mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone number"
            />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Mask Anything"
        href="#mask-anything"
        id="mask-anything"
        language="html"
        :code="$maskAnythingExample">
        <div class="mx-auto max-w-sm">
            <x-inputs.maskable
                id="mask-anything"
                wire:model.defer="maskable"
                label="Mask Anything"
                mask="##.SS.A.a-##"
                placeholder="12.aB.C.d-34"
            />
        </div>
    </x-code-preview>

    <div id="create-custom-input">
        <x-section.title title="Create a Custom Input" href="#create-custom-input" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                You can create a new input component, just extend the default component.
            </p>
        </div>

        <x-code language="php" :contents="$customInputExample" />
    </div>

    <div id="input-options">
        <x-section.title href="#input-options" title="Input Options" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The maskable input accepts all
                <a class="dark:text-secondary-500" href="{{ route('docs.inputs') }}#input-options">input</a>
                options and slots
            </p>
        </div>

        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="mask"          required="true"  default="none"  type="string"   />
            <x-option-table-row prop="emitFormatted" required="false" default="false" type="boolean"   />
        </x-options-table>
    </div>
</div>

