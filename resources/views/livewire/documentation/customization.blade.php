<div class="space-y-10">
    <x-section.title title="Components Customization" />

    <div class="mt-5 mb-2 prose xl:max-w-3xl xl:mb-8 text-gray-500">
        <p>
            You can disable/rename/extends all wireui components. <br>
            Just publish the wireui config. <br>
            Rename the alias key with your preferred name.
        </p>
    </div>

    <div>
        Publish the wireui config
        <x-code language="shell" code="php artisan vendor:publish --tag='wireui.config'" />
    </div>

    <div>
        See customizations example <br>
        PS: After changing it, clear the view cache
        <span class="text-indigo-600">"php artisan view:clear"</span>
        <x-code language="php">
config/wireui.php

...
'components' => [
    // rename the component
    'input'              => [
        'class' => Components\Input::class,
        'alias' => 'form.input', // rename this alias
    ],

    // disable the component
    // 'textarea'           => [
    //     'class' => Components\Textarea::class,
    //     'alias' => 'textarea',
    // ],

    // extends the component
    'button'             => [
        'class' => App\Views\Components\MyButton::class,
        'alias' => 'button',
    ],
]
...
        </x-code>
    </div>
</div>
