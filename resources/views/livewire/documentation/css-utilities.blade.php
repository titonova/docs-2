<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#css-utlitites" label="CSS Utilities">
                <x-summary.item href="#hide-scrollbar" label="Hide Scrollbar" />
                <x-summary.item href="#soft-scrollbar" label="Soft Scrollbar" />
            </x-summary.header>
        </x-summary>
    </x-slot>

    <div id="css-utlitites">
        <x-section.title title="CSS Utilities" href="#css-utlitites" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            Some css utilities used in the WireUI components that should be useful for all developers.
        </div>
    </div>

    <x-code-preview
        title="Hide Scrollbar"
        href="#hide-scrollbar"
        id="hide-scrollbar"
        language="html"
        :code="$hideScrollbar">
        <x-alerts.info class="mb-4 shadow-none">
            You can hide the scrollbar by adding the <b>.hide-scrollbar</b> CSS class.
            <br /> You can scroll the content pressing shift + mouse wheel.
        </x-alerts.info>

        {!! $hideScrollbar !!}
    </x-code-preview>

    <x-code-preview
        title="Soft Scrollbar"
        href="#soft-scrollbar"
        id="soft-scrollbar"
        language="html"
        :code="$softScrollbar">
        <x-alerts.info class="mb-4 shadow-none">
            You can change the scrollbar by adding the <b>.soft-scrollbar</b> CSS class.
        </x-alerts.info>

        {!! $softScrollbar !!}
    </x-code-preview>
</div>
