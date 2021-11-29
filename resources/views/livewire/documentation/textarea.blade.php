<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#textarea" label="Textarea" />
            <x-summary.header href="#textarea-options" label="Textarea Options" />
        </x-summary>
    </x-slot>

    <div id="textarea">
        <x-section.title title="Textarea" />

        <div class="mt-4 prose xl:max-w-3xl xl:mb-8 text-gray-500 dark:text-gray-400">
            <p>
                The textarea component helps with forms.
                When a <b>wire:model</b> is passed and the <b>id</b> or <b>name</b> attribute is not passed,
                the <b>id</b> receives an <b>md5</b> of the <b>model</b>, and the <b>name</b> receives the exact <b>model</b>.
            </p>
        </div>
    </div>

    <x-code-preview
        title="Textarea Input"
        href="#simple-textarea"
        id="simple-textarea"
        language="html"
        :code="$simpleExample">
        <div class="mx-auto max-w-sm">
            <x-textarea label="Annotations" placeholder="write your annotations" />
        </div>
    </x-code-preview>

    <div id="textarea-options" class="dark:text-gray-400">
        <x-section.title href="#textarea-options" title="Textarea Options" />
        <p>
            The textarea component has all
            <a class="text-indigo-700" href="{{ route('docs.inputs') }}#input-options">input</a>
            options and slots
        </p>
    </div>
</div>
