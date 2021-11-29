<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#simple-dropdown" label="Dropdown">
                <x-summary.item href="#simple-dropdown" label="Simple Dropdown" />
                <x-summary.item href="#header-dropdown" label="Header Dropdown" />
                <x-summary.item href="#separator-dropdown" label="Separator Dropdown" />
                <x-summary.item href="#item-icon" label="Item Icon" />
                <x-summary.item href="#trigger-slot" label="Trigger Slot" />
                <x-summary.item href="#item-slot" label="Item Slot" />
            </x-summary.header>

            <x-summary.header href="#dropdown-options" label="Dropdown Options" />
            <x-summary.header href="#dropdown-header-options" label="Dropdown Header Options" />
            <x-summary.header href="#dropdown-item-options" label="Dropdown Item Options" />
        </x-summary>
    </x-slot>

    <x-code-preview
        title="Simple Dropdown"
        href="#simple-dropdown"
        id="simple-dropdown"
        language="html"
        :code="$simpleDropdown">
        <div class="flex flex-wrap gap-4">
            <x-dropdown align="left">
                <x-dropdown.item label="Settings" />
                <x-dropdown.item label="My Profile" />
                <x-dropdown.item label="Logout" />
            </x-dropdown>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Header Dropdown"
        href="#header-dropdown"
        id="header-dropdown"
        language="html"
        :code="$headerDropdown">
        <div class="flex flex-wrap gap-4">
            <x-dropdown align="left">
                <x-dropdown.header label="Settings">
                    <x-dropdown.item label="Preferences" />
                    <x-dropdown.item label="My Profile" />
                </x-dropdown.header>

                <x-dropdown.item label="Logout" />
            </x-dropdown>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Separator Dropdown"
        href="#separator-dropdown"
        id="separator-dropdown"
        language="html"
        :code="$separatorDropdown">
        <div class="flex flex-wrap gap-4">
            <x-dropdown align="left">
                <x-dropdown.header label="Settings">
                    <x-dropdown.item label="Preferences" />
                    <x-dropdown.item label="My Profile" />
                </x-dropdown.header>

                <x-dropdown.item separator label="Help Center" />
                <x-dropdown.item label="Live Chat" />
                <x-dropdown.item label="Logout" />
            </x-dropdown>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Item Icon"
        href="#item-icon"
        id="item-icon"
        language="html"
        :code="$iconDropdown">
        <div class="flex flex-wrap gap-4">
            <x-dropdown align="left">
                <x-dropdown.header label="Settings">
                    <x-dropdown.item icon="cog" label="Preferences" />
                    <x-dropdown.item icon="user" label="My Profile" />
                </x-dropdown.header>

                <x-dropdown.item separator label="Help Center" />
                <x-dropdown.item label="Live Chat" />
                <x-dropdown.item label="Logout" />
            </x-dropdown>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Trigger Slot"
        href="#trigger-slot"
        id="trigger-slot"
        language="html"
        :code="$triggerSlot">
        <div class="flex flex-wrap gap-4">
            <x-dropdown align="left">
                <x-slot name="trigger">
                    <x-button label="Options" primary />
                </x-slot>

                <x-dropdown.item label="Help Center" />
                <x-dropdown.item separator label="Live Chat" />
                <x-dropdown.item separator label="Logout" />
            </x-dropdown>
        </div>
    </x-code-preview>

    <x-code-preview
        title="Item Slot"
        href="#item-slot"
        id="item-slot"
        language="html"
        :code="$itemSlot">
        <div class="flex flex-wrap gap-4">
            <x-dropdown align="left">
                <x-dropdown.item>
                    <b>Help Center</b>
                </x-dropdown.item>
                <x-dropdown.item separator>
                    <b>Live Chat</b>
                </x-dropdown.item>
                <x-dropdown.item separator>
                    <b>Logout</b>
                </x-dropdown.item>
            </x-dropdown>
        </div>
    </x-code-preview>

    <div id="dropdown-options">
        <x-section.title href="#dropdown-options" title="Dropdown Options" />
        <x-options-table class="mt-2 mb-6 w-full">
            <x-option-table-row prop="width"      required="false" default="w-48"               type="string"  available="-" />
            <x-option-table-row prop="align"      required="false" default="right"              type="string"  available="left|right" />
            <x-option-table-row prop="persistent" required="false" default="false"              type="boolean" available="-" />
            <x-option-table-row prop="trigger"    required="false" default="dots-vertical icon" type="slot"    available="-" />
        </x-options-table>
    </div>

    <div id="dropdown-header-options">
        <x-section.title href="#dropdown-header-options" title="Dropdown Header Options" />
        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="separator" required="false" default="false"  type="boolean" />
            <x-option-table-row prop="label"     required="true"  default="none" type="string" />
            <x-option-table-row prop="slot"      required="false" default="none" type="slot" />
        </x-options-table>
    </div>

    <div id="dropdown-item-options">
        <x-section.title href="#dropdown-item-options" title="Dropdown Item Options" />
        <x-options-table class="mt-2 mb-6 w-full" :available="false">
            <x-option-table-row prop="separator" required="false" default="false"  type="boolean" />
            <x-option-table-row prop="label"     required="true"  default="none" type="string" />
            <x-option-table-row prop="icon"      required="false" default="none" type="string" />
            <x-option-table-row prop="slot"      required="false" default="none" type="slot" />
        </x-options-table>
    </div>
</div>
