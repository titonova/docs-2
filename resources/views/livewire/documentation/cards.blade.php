<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#simple-card" label="Cards">
                <x-summary.item href="#simple-card" label="Simple Card" />
                <x-summary.item href="#card-title" label="Card Title" />
                <x-summary.item href="#action-slot" label="Card Action Slot" />
                <x-summary.item href="#footer-slot" label="Card Footer" />
            </x-summary.header>

            <x-summary.header href="#card-options" label="Card Options" />
        </x-summary>
    </x-slot>

    <div>
        <x-section.title title="Cards" />

        <div class="mt-5 prose text-gray-500 xl:max-w-3xl xl:mb-8 dark:text-gray-400">
            <p>
                Cards are often used to display content in a container, restricting it to a single subject. Each card may also contain actions like menu or buttons.
            </p>
            <p>
                Using cards makes the page easy to read, scan and scroll through.
            </p>
        </div>
    </div>

    <x-code-preview
        title="Simple Card"
        href="#simple-card"
        id="simple-card"
        language="html"
        :code="$simpleCard">
        <div class="flex justify-center gap-4">
            <x-card>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </x-card>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Card Title"
        href="#card-title"
        id="card-title"
        language="html"
        :code="$cardTitle">
        <div class="flex justify-center gap-4">
            <x-card title="Lorem Ipsum is simply!">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </x-card>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Card Action Slot"
        href="#action-slot"
        id="action-slot"
        language="html"
        :code="$actionSlot">
        <div class="flex justify-center gap-4">
            <x-card title="Lorem Ipsum is simply!">
                <x-slot name="action">
                    <button class="rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        <x-icon name="dots-vertical" class="w-4 h-4 text-gray-500" />
                    </button>
                </x-slot>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </x-card>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Card Footer"
        href="#footer-slot"
        id="footer-slot"
        language="html"
        :code="$footerSlot">
        <div class="flex justify-center gap-4">
            <x-card title="Lorem Ipsum is simply!">
                <x-slot name="action">
                    <button class="rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        <x-icon name="dots-vertical" class="w-4 h-4 text-gray-500" />
                    </button>
                </x-slot>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

                <x-slot name="footer">
                    <div class="flex items-center justify-between">
                        <x-button label="Delete" flat negative />
                        <x-button label="Save" primary />
                    </div>
                </x-slot>
            </x-card>
        </div>
    </x-code-preview>

    <div id="card-options">
        <x-section.title href="#card-options" title="Card Options" />
            <x-options-table class="w-full mt-2 mb-6" :available="false">
            <x-option-table-row prop="padding" required="false" default="px-2 py-5 md:px-4" type="string" />
            <x-option-table-row prop="shadow"  required="false" default="shadow-md"  type="string" />
            <x-option-table-row prop="rounded" required="false" default="rounded-lg" type="string" />
            <x-option-table-row prop="color"   required="false" default="bg-white border border-gray-200" type="string" />
            <x-option-table-row prop="title"   required="false" default="none"      type="string" />
            <x-option-table-row prop="cardClasses"  required="false" default="none" type="string" />
            <x-option-table-row prop="action"  required="false" default="none" type="slot" />
            <x-option-table-row prop="header"  required="false" default="none" type="slot" />
            <x-option-table-row prop="footer"  required="false" default="none" type="slot" />
        </x-options-table>
    </div>
</div>
