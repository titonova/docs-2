<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#inputs" label="Password Inputs">
                <x-summary.item href="#password-input" label="Password Input" />
            </x-summary.header>

            <x-summary.header href="#input-options" label="Inputs Options" />
        </x-summary>
    </x-slot>

    <div>
        <x-section.title id="inputs" title="Password Input" />

        <div class="mt-5 prose text-gray-500 xl:max-w-4xl xl:mb-8 dark:text-gray-400">
            This component will add a toggle button to show/hide the password value
        </div>
    </div>

    <div class="space-y-4">
        <x-code-preview
            title="Password Input"
            href="#password-input"
            id="password-input"
            language="blade"
            :code="$passwordExample">
            <div class="max-w-sm mx-auto">
                <x-inputs.password label="Secret 🙈" value="I love WireUI ❤️" />
            </div>
        </x-code-preview>
    </div>

    <div id="input-options">
        <x-section.title href="#input-options" title="Input Options" />

        <div class="mt-5 prose xl:max-w-3xl xl:mb-8 text-gray-500">
            <p>
                The password input accepts all
                <a class="dark:text-secondary-500" href="{{ route('docs.inputs') }}#input-options">input</a>
                options and slots
            </p>
        </div>
    </div>
</div>
