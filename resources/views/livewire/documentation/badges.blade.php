<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#badges" label="Badges">
                <x-summary.item href="#default-colors"  label="Default Colors" />
                <x-summary.item href="#outline-colors"  label="Outline Colors" />
                <x-summary.item href="#flat-colors"     label="Flat Colors" />
                <x-summary.item href="#rounded-badges" label="Rounded Badges" />
                <x-summary.item href="#squared-badges" label="Squared Badges" />
                <x-summary.item href="#circle-badges"  label="Circle Badges" />
                <x-summary.item href="#badge-icons"    label="Badge With Icons" />
                <x-summary.item href="#badge-sizes"    label="Badge Sizes" />
            </x-summary.header>

            <x-summary.header href="#badge-options" label="Badge Options" />
        </x-summary>
    </x-slot>

    <div id="badges">
        <x-section.title title="Badges" />

        <div class="mt-5 prose text-secondary-500 xl:mb-8">
            <p>
                The badge component has multiples styles and options to customize.
                A simple API to use badge component with icons and any colors
            </p>
        </div>
    </div>

    <x-code-preview
        title="Default Colors"
        href="#default-colors"
        id="default-colors"
        language="html"
        :code="$defaultColorsCode">
        <div class="flex flex-wrap gap-3">
            <x-badge label="Default" />
            <x-badge primary label="Primary" />
            <x-badge secondary label="Secondary" />
            <x-badge positive label="Positive" />
            <x-badge negative label="Negative" />
            <x-badge warning label="Warning" />
            <x-badge info label="Info" />
            <x-badge dark label="Dark" />
            <x-badge white label="White" />
            <x-badge black label="Black" />
            <x-badge slate label="Slate" />
            <x-badge gray label="Gray" />
            <x-badge zinc label="Zinc" />
            <x-badge neutral label="Neutral" />
            <x-badge stone label="Stone" />
            <x-badge red label="Red" />
            <x-badge orange label="Orange" />
            <x-badge amber label="Amber" />
            <x-badge lime label="Lime" />
            <x-badge green label="Green" />
            <x-badge emerald label="Emerald" />
            <x-badge teal label="Teal" />
            <x-badge cyan label="Cyan" />
            <x-badge sky label="Sky" />
            <x-badge blue label="Blue" />
            <x-badge indigo label="Indigo" />
            <x-badge violet label="Violet" />
            <x-badge purple label="Purple" />
            <x-badge fuchsia label="Fuchsia" />
            <x-badge pink label="Pink" />
            <x-badge rose label="Rose" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Outline Colors"
        href="#outline-colors"
        id="outline-colors"
        language="html"
        :code="$outlineColorsCode">
        <div class="flex flex-wrap gap-3">
            <x-badge outline label="Default" />
            <x-badge outline primary label="Primary" />
            <x-badge outline secondary label="Secondary" />
            <x-badge outline positive label="Positive" />
            <x-badge outline negative label="Negative" />
            <x-badge outline warning label="Warning" />
            <x-badge outline info label="Info" />
            <x-badge outline dark label="Dark" />
            <x-badge outline white label="White" />
            <x-badge outline black label="Black" />
            <x-badge outline slate label="Slate" />
            <x-badge outline gray label="Gray" />
            <x-badge outline zinc label="Zinc" />
            <x-badge outline neutral label="Neutral" />
            <x-badge outline stone label="Stone" />
            <x-badge outline red label="Red" />
            <x-badge outline orange label="Orange" />
            <x-badge outline amber label="Amber" />
            <x-badge outline lime label="Lime" />
            <x-badge outline green label="Green" />
            <x-badge outline emerald label="Emerald" />
            <x-badge outline teal label="Teal" />
            <x-badge outline cyan label="Cyan" />
            <x-badge outline sky label="Sky" />
            <x-badge outline blue label="Blue" />
            <x-badge outline indigo label="Indigo" />
            <x-badge outline violet label="Violet" />
            <x-badge outline purple label="Purple" />
            <x-badge outline fuchsia label="Fuchsia" />
            <x-badge outline pink label="Pink" />
            <x-badge outline rose label="Rose" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Flat Colors"
        href="#flat-colors"
        id="flat-colors"
        language="html"
        :code="$flatColorsCode">
        <div class="flex flex-wrap gap-3">
            <x-badge flat label="Default" />
            <x-badge flat primary label="Primary" />
            <x-badge flat secondary label="Secondary" />
            <x-badge flat positive label="Positive" />
            <x-badge flat negative label="Negative" />
            <x-badge flat warning label="Warning" />
            <x-badge flat info label="Info" />
            <x-badge flat dark label="Dark" />
            <x-badge flat white label="White" />
            <x-badge flat black label="Black" />
            <x-badge flat slate label="Slate" />
            <x-badge flat gray label="Gray" />
            <x-badge flat zinc label="Zinc" />
            <x-badge flat neutral label="Neutral" />
            <x-badge flat stone label="Stone" />
            <x-badge flat red label="Red" />
            <x-badge flat orange label="Orange" />
            <x-badge flat amber label="Amber" />
            <x-badge flat lime label="Lime" />
            <x-badge flat green label="Green" />
            <x-badge flat emerald label="Emerald" />
            <x-badge flat teal label="Teal" />
            <x-badge flat cyan label="Cyan" />
            <x-badge flat sky label="Sky" />
            <x-badge flat blue label="Blue" />
            <x-badge flat indigo label="Indigo" />
            <x-badge flat violet label="Violet" />
            <x-badge flat purple label="Purple" />
            <x-badge flat fuchsia label="Fuchsia" />
            <x-badge flat pink label="Pink" />
            <x-badge flat rose label="Rose" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Rounded Badge"
        href="#rounded-badges"
        id="rounded-badges"
        language="html"
        :code="$roundedBadgesCode">
        <div class="flex flex-wrap gap-3">
            <x-badge rounded label="No Color" />
            <x-badge rounded primary label="Primary" />
            <x-badge rounded secondary label="Secondary" />
            <x-badge rounded positive label="Positive" />
            <x-badge rounded negative label="Negative" />
            <x-badge rounded warning label="Warning" />
            <x-badge rounded info label="Info" />
            <x-badge rounded dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Squared Badge"
        href="#squared-badges"
        id="squared-badges"
        language="html"
        :code="$squaredBadgesCode">
        <div class="flex flex-wrap gap-3">
            <x-badge squared label="No Color" />
            <x-badge squared primary label="Primary" />
            <x-badge squared secondary label="Secondary" />
            <x-badge squared positive label="Positive" />
            <x-badge squared negative label="Negative" />
            <x-badge squared warning label="Warning" />
            <x-badge squared info label="Info" />
            <x-badge squared dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Circle Badges"
        href="#circle-badges"
        id="circle-badges"
        language="html"
        :code="$circleBadgesCode">
        <div class="flex flex-wrap gap-3">
            <x-badge.circle icon="home" />
            <x-badge.circle primary icon="pencil" />
            <x-badge.circle secondary icon="clipboard-list"  />
            <x-badge.circle positive icon="check" />
            <x-badge.circle negative icon="x" />
            <x-badge.circle warning icon="exclamation" />
            <x-badge.circle info icon="information-circle" />
            <x-badge.circle dark icon="ban" />
            <x-badge.circle secondary label="A"  />
            <x-badge.circle positive label="B" />
            <x-badge.circle negative label="C" />
            <x-badge.circle primary label="+" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Badge With Icons"
        href="#badge-icons"
        id="badge-icons"
        language="html"
        :code="$badgeIconsCode">
        <div class="flex flex-wrap gap-3">
            <x-badge icon="home" label="Default" />
            <x-badge icon="pencil" primary label="Primary" />
            <x-badge icon="clipboard-list" secondary label="Secondary" />
            <x-badge icon="check" positive label="Positive" />
            <x-badge icon="x" negative label="Negative" />
            <x-badge icon="exclamation" warning label="Warning" />
            <x-badge right-icon="information-circle" info label="Info" />
            <x-badge right-icon="ban" dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Badge Sizes"
        href="#badge-sizes"
        id="badge-sizes"
        language="html"
        :code="$badgeSizesCode">
        <div class="flex flex-wrap items-center gap-3">
            <x-badge icon="clipboard-list" secondary label="default size" />
            <x-badge md icon="clipboard-list" positive label="md size" />
            <x-badge lg icon="clipboard-list" negative label="lg size" />
        </div>
    </x-code-preview>

    <div class="flex items-center p-4 border rounded-lg gap-x-3 dark:border-0 shadow-soft bg-yellow-50 dark:bg-secondary-700">
        <x-icon name="exclamation" class="w-5 h-5 text-yellow-400 shrink-0" />

        <p class="text-sm text-yellow-700 dark:text-yellow-400">
            The attributes [squared, rounded, full, right-icon, prepend, append] are not supported in <b>badge.circle</b> component
        </p>
    </div>

    <div id="badge-options">
        <x-section.title href="#badge-options" title="Badge Options" />

        <x-options-table class="w-full mt-2 mb-6">
            <x-option-table-row prop="md"   required="false" default="false"   type="boolean" available="boolean" />
            <x-option-table-row prop="lg"   required="false" default="false"   type="boolean" available="boolean" />
            <x-option-table-row prop="size" required="false" default="default" type="string"  available="default|md|lg" />

            <x-option-table-row prop="primary"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="secondary" required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="positive"  required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="negative"  required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="warning"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="info"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="dark"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="white"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="black"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="slate"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="gray"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="zinc"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="neutral"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="stone"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="red"       required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="orange"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="amber"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="lime"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="green"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="emerald"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="teal"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="cyan"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="sky"       required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="blue"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="indigo"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="violet"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="purple"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="fuchsia"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="pink"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="rose"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="color"     required="false" default="null"  type="string"  available="default colors + all tailwind colors" />

            <x-option-table-row prop="rounded" required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="squared" required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="flat"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="full"    required="false" default="false" type="boolean" available="boolean" />

            <x-option-table-row prop="label"     required="false" default="null" type="string" available="*" />
            <x-option-table-row prop="icon"      required="false" default="null" type="string" available="all heroicons" />
            <x-option-table-row prop="rightIcon" required="false" default="null" type="string" available="all heroicons" />
        </x-options-table>
    </div>
</div>
