<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#buttons" label="Buttons">
                <x-summary.item href="#simple-button" label="Simple Button" />
                <x-summary.item href="#button-colors" label="Button Colors" />
                <x-summary.item href="#rounded-buttons" label="Rounded Buttons" />
                <x-summary.item href="#squared-buttons" label="Squared Buttons" />
                <x-summary.item href="#outline-buttons" label="Outline Buttons" />
                <x-summary.item href="#flat-buttons" label="Flat Buttons" />
                <x-summary.item href="#button-icons" label="Button Icons" />
                <x-summary.item href="#only-icons" label="Only Icons" />
                <x-summary.item href="#button-sizes" label="Button Sizes" />
                <x-summary.item href="#loading-spinner" label="Loading Spinner" />
            </x-summary.header>

            <x-summary.header href="#button-options" label="Button Options" />
        </x-summary>
    </x-slot>

    <div id="buttons">
        <x-section.title title="Buttons" />
        <div class="mt-5 prose text-gray-500 xl:mb-8">
            <p>
                The button component has multiples styles and options to customize.
                A simple API to use button component with icons and any colors
            </p>
        </div>
    </div>

    <x-code-preview
        title="Simple Button"
        href="#simple-button"
        id="simple-button"
        language="html"
        :code="$simpleButtonExample">
        <div class="flex flex-wrap gap-4">
            <x-button label="No Color" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Button Colors"
        href="#button-colors"
        id="button-colors"
        language="html"
        :code="$buttonColorsExample">
        <div class="flex flex-wrap justify-left gap-4">
            <x-button label="No Color" />
            <x-button primary label="Primary" />
            <x-button secondary label="Secondary" />
            <x-button positive label="Positive" />
            <x-button negative label="Negative" />
            <x-button warning label="Warning" />
            <x-button info label="Info" />
            <x-button dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Rounded Button"
        href="#rounded-buttons"
        id="rounded-buttons"
        language="html"
        :code="$roundedButtonsExample">
        <div class="flex flex-wrap justify-left gap-4">
            <x-button rounded label="No Color" />
            <x-button rounded primary label="Primary" />
            <x-button rounded secondary label="Secondary" />
            <x-button rounded positive label="Positive" />
            <x-button rounded negative label="Negative" />
            <x-button rounded warning label="Warning" />
            <x-button rounded info label="Info" />
            <x-button rounded dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Squared Button"
        href="#squared-buttons"
        id="squared-buttons"
        language="html"
        :code="$squaredButtonsExample">
        <div class="flex flex-wrap justify-left gap-4">
            <x-button squared label="No Color" />
            <x-button squared primary label="Primary" />
            <x-button squared secondary label="Secondary" />
            <x-button squared positive label="Positive" />
            <x-button squared negative label="Negative" />
            <x-button squared warning label="Warning" />
            <x-button squared info label="Info" />
            <x-button squared dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Outline Buttons"
        href="#outline-buttons"
        id="outline-buttons"
        language="html"
        :code="$outlineButtonsExample">
        <div class="flex flex-wrap justify-left gap-4">
            <x-button outline label="No Color" />
            <x-button outline primary label="Primary" />
            <x-button outline secondary label="Secondary" />
            <x-button outline positive label="Positive" />
            <x-button outline negative label="Negative" />
            <x-button outline warning label="Warning" />
            <x-button outline info label="Info" />
            <x-button outline dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Flat Buttons"
        href="#flat-buttons"
        id="flat-buttons"
        language="html"
        :code="$flatButtonsExample">
        <div class="flex flex-wrap justify-left gap-4">
            <x-button flat label="No Color" />
            <x-button flat primary label="Primary" />
            <x-button flat secondary label="Secondary" />
            <x-button flat positive label="Positive" />
            <x-button flat negative label="Negative" />
            <x-button flat warning label="Warning" />
            <x-button flat info label="Info" />
            <x-button flat dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Button Icons"
        href="#button-icons"
        id="button-icons"
        language="html"
        :code="$buttonIconsExample">
        <div class="flex flex-wrap justify-left gap-4">
            <x-button icon="home" label="No Color" />
            <x-button icon="pencil" primary label="Primary" />
            <x-button icon="clipboard-list" secondary label="Secondary" />
            <x-button icon="check" positive label="Positive" />
            <x-button icon="x" negative label="Negative" />
            <x-button icon="exclamation" warning label="Warning" />
            <x-button right-icon="information-circle" info label="Info" />
            <x-button right-icon="ban" dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Only Icons"
        href="#only-icons"
        id="only-icons"
        language="html"
        :code="$onlyIconsExample">
        <div class="flex flex-wrap justify-left gap-4">
            <x-button icon="home" />
            <x-button icon="pencil" primary />
            <x-button icon="clipboard-list" secondary />
            <x-button icon="check" positive />
            <x-button icon="x" negative />
            <x-button icon="exclamation" rounded warning />
            <x-button right-icon="information-circle" info />
            <x-button right-icon="ban" dark />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Button Sizes"
        href="#button-sizes"
        id="button-sizes"
        language="html"
        :code="$buttonSizesExample">
        <div class="flex flex-wrap justify-left gap-4">
            <div>
                <x-button xs icon="pencil" primary label="Extra Small Button" />
            </div>
            <div>
                <x-button sm icon="users" dark label="Small Button" />
            </div>
            <div>
                <x-button icon="clipboard-list" secondary label="Normal" />
            </div>
            <div>
                <x-button md icon="check" positive label="Medium Button" />
            </div>
            <div>
                <x-button lg icon="x" negative label="Large Button" />
            </div>
        </div>
    </x-code-preview>

    <x-box info>You can show a spinner loading when an action if fired <br> You can pass <b>wire:target</b> value into <b>spinner</b> prop If no value is give, all loading effects will be applied</x-box>

    <x-code-preview
        title="Loading Spinner"
        href="#loading-spinner"
        id="loading-spinner"
        language="html"
        :code="$loadingSpinnerExample">
        <div class="flex items-center gap-4">
            <x-button wire:click="$refresh" spinner primary label="Save without target" />

            <x-button wire:click="sleeping" spinner="sleeping" primary label="Save with target" />

            <x-button wire:click="sleeping" spinner="sleeping" loading-delay="short" primary label="Save with target + delay indicator" />
        </div>
    </x-code-preview>

    <div id="button-options">
        <x-section.title href="#button-options" title="Button Options" />
        <x-options-table class="w-full mt-2 mb-6">
            <x-option-table-row prop="xs"        required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="md"        required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="lg"        required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="primary"   required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="secondary" required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="positive"  required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="negative"  required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="warning"   required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="info"      required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="dark"      required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="rounded"   required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="squared"   required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="bordered"  required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="flat"      required="false" default="false" type="boolean" available="true|false" />
            <x-option-table-row prop="color"     required="false" default="none" type="string"   available="colors" />
            <x-option-table-row prop="size"      required="false" default="sm"   type="string"   available="xs|sm|md|lg" />
            <x-option-table-row prop="label"     required="false" default="none" type="string"   available="" />
            <x-option-table-row prop="icon"      required="false" default="none" type="string"   available="all heroicons" />
            <x-option-table-row prop="rightIcon" required="false" default="none" type="string"   available="all heroicons" />
            <x-option-table-row prop="spinner" required="false" default="none" type="boolean|string" available="--" />
            <x-option-table-row prop="loadingDelay" required="false" default="none" type="string" available="shortest|shorter|short|long|longer|longest" />
        </x-options-table>

        <label class="mb-1 font-semibold text-gray-700">Colors</label>
        <x-code copy="false" line-numbers="false" language="js" :code="<<<EOT
        primary|secondary|positive|negative|warning|info|dark
        EOT" />
    </div>
</div>
