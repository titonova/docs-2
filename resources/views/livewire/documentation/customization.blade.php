<div class="space-y-10">
    <x-section.title title="Components Customization" />

    <div class="mt-5 mb-2 prose text-gray-500 xl:max-w-3xl xl:mb-8">
        <p>
            You can disable, rename or extend all the WireUI components.
        </p>
        <p>
            To perform customizations, you must publish the WireUI config. Run the command:
        </p>
            <x-code
                language="shell"
                :line-numbers="false"
                contents="php artisan vendor:publish --tag='wireui.config'"
            />

        <p>
           Then, open the file <x-mark>config/wireui.php</x-mark> and rename the alias key with your preferred name.
            <br/><br/>
           After saving, you must clear the View Cache by running the following command:
        </p>

        <x-code
            language="shell"
            :line-numbers="false"
            contents="php artisan view:clear"
        />
    </div>

    <x-alerts.info>
        Tip: It's advisable to run this command always after you make changes.
    </x-alerts.info>

    <div>

       <p class="text-gray-500">The example below shows some customizations:</p>
        <br/>
        <x-code language="php">
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
