<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#avatar" label="Avatar Avatar">
                <x-summary.item href="#image"   label="Avatar Image" />
                <x-summary.item href="#label"   label="Avatar Label" />
                <x-summary.item href="#squared" label="Avatar Squared" />
                <x-summary.item href="#sizes"   label="Avatar Sizes" />
                <x-summary.item href="#group"   label="Avatar Group" />
                <x-summary.item href="#placeholder" label="Placeholder" />
            </x-summary.header>

            <x-summary.header href="#avatar-options" label="Avatar Options" />
        </x-summary>
    </x-slot>

    <div id="avatar">
        <x-section.title title="Avatar" />

        <div class="mt-5 prose text-secondary-500 xl:mb-8">
            <p>
                The avatar component will display an image, a label, or a default SVG placeholder.
                <br /> You can use this component to build your features like profile pictures.
            </p>
        </div>
    </div>

    <x-code-preview
        title="Avatar Image"
        href="#image"
        id="image"
        language="html"
        :code="$imagesCode">
        <div class="flex items-center gap-x-3">
            <x-avatar xs :src="asset('assets/images/pedro.jpg')" />
            <x-avatar sm :src="asset('assets/images/fernando.jpeg')" />
            <x-avatar md :src="asset('assets/images/andre.jpeg')" />
            <x-avatar lg :src="asset('assets/images/keithyellen.jpg')" />
            <x-avatar xl :src="asset('assets/images/pedro.jpg')" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Avatar Label"
        href="#label"
        id="label"
        language="html"
        :code="$labelsCode">
        <div class="flex items-center gap-x-3">
            <x-avatar xs label="AB" />
            <x-avatar sm label="AB" />
            <x-avatar md label="AB" />
            <x-avatar lg label="AB" />
            <x-avatar xl label="AB" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Avatar Squared"
        href="#squared"
        id="squared"
        language="html"
        :code="$squaredCode">
        <div class="flex items-center gap-x-3">
            <x-avatar xs squared :src="asset('assets/images/pedro.jpg')" />
            <x-avatar sm squared :src="asset('assets/images/fernando.jpeg')" />
            <x-avatar md squared :src="asset('assets/images/andre.jpeg')" />
            <x-avatar lg squared :src="asset('assets/images/keithyellen.jpg')" />
            <x-avatar xl squared :src="asset('assets/images/pedro.jpg')" />
        </div>
    </x-code-preview>

    <x-alerts.info>
        You can customize the avatar <x-mark>size</x-mark> by adding the size css classes into the size attribute.
    </x-alerts.info>

    <x-code-preview
        title="Avatar Sizes"
        href="#sizes"
        id="sizes"
        language="html"
        :code="$sizesCode">
        <div class="flex items-center gap-x-3">
            <x-avatar xs label="AB" />
            <x-avatar sm label="AB" />
            <x-avatar md label="AB" />
            <x-avatar lg label="AB" />
            <x-avatar xl label="AB" />
            <x-avatar size="w-18 h-18 text-2xl" label="AB" />
            <x-avatar size="w-24 h-24" :src="asset('assets/images/pedro.jpg')" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Avatar Group"
        href="#group"
        id="group"
        language="html"
        :code="$sizesCode">
        <div class="flex -space-x-2 items-center">
            <x-avatar sm :src="asset('assets/images/fernando.jpeg')" />
            <x-avatar sm :src="asset('assets/images/andre.jpeg')" />
            <x-avatar sm :src="asset('assets/images/keithyellen.jpg')" />
            <x-avatar sm :src="asset('assets/images/pedro.jpg')" />
        </div>
    </x-code-preview>

    <x-alerts.info>
        If no text and no img is given, the avatar will display a default SVG placeholder.
    </x-alerts.info>

    <x-code-preview
        title="Avatar Placeholder"
        href="#placeholder"
        id="placeholder"
        language="html"
        :code="$sizesCode">
        <div class="flex items-center gap-x-2">
            <x-avatar xs />
            <x-avatar sm />
            <x-avatar md />
            <x-avatar lg />
            <x-avatar xl />
        </div>
    </x-code-preview>

    <div id="avatar-options">
        <x-section.title href="#avatar-options" title="Avatar Options" />

        <x-options-table class="w-full mt-2 mb-6" :available="false">
            <x-option-table-row prop="xs"      required="false" default="false" type="boolean" />
            <x-option-table-row prop="sm"      required="false" default="false" type="boolean" />
            <x-option-table-row prop="md"      required="false" default="false" type="boolean" />
            <x-option-table-row prop="lg"      required="false" default="false" type="boolean" />
            <x-option-table-row prop="xl"      required="false" default="false" type="boolean" />
            <x-option-table-row prop="squared" required="false" default="false" type="boolean" />
            <x-option-table-row prop="size"    required="false" default="md"    type="string|null" />
            <x-option-table-row prop="label"   required="false" default="null"  type="string|null" />
            <x-option-table-row prop="src"     required="false" default="null"  type="string|null" />
            <x-option-table-row prop="border"  required="false" default="border border-gray-200 dark:border-secondary-500" type="string|null" />
        </x-options-table>
    </div>
</div>
