<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#textarea" label="Textarea" />
            <x-summary.header href="#textarea-options" label="Textarea Options" />
        </x-summary>
    </x-slot>

    <div id="textarea">
        <x-section.title title="Textarea" />

        <div class="mt-5 prose text-gray-500 xl:max-w-3xl xl:mb-8 dark:text-gray-400">
            <p>
                The Textarea component is very useful to build forms.
                
            </p>
            <p>
                You can set the attribute <x-mark>wire:model</x-mark> to automatically have the attributes <x-mark>id</x-mark> set to the MD5 of the model and <x-mark>name</x-mark> to the exact model. You must NOT pass the attributes id and name for this to work. 
            </p>
            <x-code line-numbers="false" language="html" :code="$wireModelExample" />
        </div>
    </div>

    <x-code-preview
        title="Textarea Input"
        href="#simple-textarea"
        id="simple-textarea"
        language="html"
        :code="$simpleExample">
        <div class="max-w-sm mx-auto">
            <x-textarea label="Annotations" placeholder="write your annotations" />
        </div>
    </x-code-preview>

    <div id="textarea-options" class="dark:text-gray-400">
        <x-section.title href="#textarea-options" title="Textarea Options" />
        <div class="mt-5">
            <p>
                The textarea component has all <a class="font-semibold text-center text-teal-600 underline" href="{{ route('docs.inputs') }}#input-options">Inputs</a> options and slots.
            </p>
        </div>
    </div>
</div>
