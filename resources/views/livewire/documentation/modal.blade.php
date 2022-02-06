<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#simple-modal" label="Modal">
                <x-summary.item href="#simple-modal" label="Simple Modal" />
                <x-summary.item href="#blur-background" label="Blur Background" />
            </x-summary.header>

            <x-summary.header href="#modal-options" label="Modal Options" />
            <x-summary.header href="#modal-card-options" label="Modal Card Options" />
            <x-summary.header href="#modal-events" label="Modal Events" />
            <x-summary.header href="#customize-default" label="Customize Default" />
        </x-summary>
    </x-slot>

    <x-code-preview
        title="Simple Modal"
        href="#simple-modal"
        id="simple-modal"
        language="html"
        :code="$simpleExample">
        <x-button label="Open" onclick="$openModal('simpleModal')" primary />

        <x-modal wire:model.defer="simpleModal">
            <x-card title="Consent Terms">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

                <x-slot name="footer">
                    <div class="flex justify-end gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button primary label="I Agree" x-on:click="close" />
                    </div>
                </x-slot>
            </x-card>
        </x-modal>
    </x-code-preview>

    <x-code-preview
        title="Blur Background"
        href="#blur-background"
        id="blur-background"
        language="html"
        :code="$blurExample">
        <x-button label="Open" onclick="$openModal('blurModal')" primary />

        <x-modal blur wire:model.defer="blurModal">
            <x-card title="Consent Terms">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

                <x-slot name="footer">
                    <div class="flex justify-end gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button primary label="I Agree" x-on:click="close" />
                    </div>
                </x-slot>
            </x-card>
        </x-modal>
    </x-code-preview>

    <x-code-preview
        title="Modal Card"
        href="#modal-card"
        id="modal-card"
        language="html"
        :code="$modalCardExample">
        <x-button label="Open" onclick="$openModal('cardModal')" primary />

        <x-modal.card title="Edit Customer" blur wire:model.defer="cardModal">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <x-input label="Name" placeholder="Your full name" />
                <x-input label="Phone" placeholder="USA phone" />

                <div class="col-span-1 sm:col-span-2">
                    <x-input label="Email" placeholder="example@mail.com" />
                </div>

                <div class="col-span-1 sm:col-span-2 cursor-pointer bg-gray-100 dark:bg-secondary-700 rounded-xl shadow-md h-72 flex items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <x-icon name="cloud-upload" class="w-16 h-16 text-blue-600 dark:text-teal-600" />
                        <p class="text-blue-600 dark:text-teal-600">Click or drop files here</p>
                    </div>
                </div>
            </div>

            <x-slot name="footer">
                <div class="flex justify-between gap-x-4">
                    <x-button flat negative label="Delete" x-on:click="close" />

                    <div class="flex gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button primary label="Save" x-on:click="close" />
                    </div>
                </div>
            </x-slot>
        </x-modal.card>
    </x-code-preview>

    <x-alerts.info>
        Tip: You can use global function <b>$openModal('myModal')</b> to open modal from your Javascript code.
    </x-alerts.info>

    <div id="modal-options">
        <x-section.title href="#modal-options" title="Modal Options" />
        <x-options-table class="mt-2 mb-6 w-full">
            <x-option-table-row prop="z-index"    required="false" default="z-50" type="string" available="all z-index" />
            <x-option-table-row prop="max-width"  required="false" default="2xl" type="string" available="sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl" />
            <x-option-table-row prop="spacing"    required="false" default="p-4" type="string" available="all paddings" />
            <x-option-table-row prop="blur"       required="false" default="none" type="string" available="sm|md|lg|xl|2xl|3xl" />
        </x-options-table>
    </div>

    <div class="space-y-4" id="modal-card-options">
        <x-section.title href="#modal-card-options" title="Modal Card Options" />

        <p class="dark:text-secondary-400">
            The modal card options extends all modal and
            <a class="text-indigo-600 dark:text-teal-600" href="{{ route('docs.cards') }}">card options</a>
        </p>

        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="squared"    required="false" default="false" type="boolean" />
            <x-option-table-row prop="fullscreen" required="false" default="false" type="boolean" />
            <x-option-table-row prop="hide-close" required="false" default="false" type="boolean" available="--" />
        </x-options-table>
    </div>

    <div class="my-4"></div>

    <x-section.title href="#modal-events" title="Modal Events" />
    <x-code language="html" :contents="$modalEvents" />

    <div class="mt-6">
        <x-section.title id="customize-default" href="#customize-default" title="Customize Default" />

        <p class="py-3 dark:text-secondary-400">
            You can
            <a class="text-indigo-700 dark:text-teal-600" href="{{ route('docs.get-started') }}#publishing">publish</a>
            wireui config or put in env file your modal preferences
        </p>

        <x-code language="php">
            'modal' => [
                'zIndex'   => env('WIREUI_MODAL_Z_INDEX', 'z-50'),
                'maxWidth' => env('WIREUI_MODAL_MAX_WIDTH', '2xl'),
                'spacing'  => env('WIREUI_MODAL_SPACING', 'p-4'),
                'align'    => env('WIREUI_MODAL_ALIGN', 'start'),
                'blur'     => env('WIREUI_MODAL_BLUR', false),
            ],
        </x-code>
    </div>
</div>
