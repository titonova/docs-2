<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#wireui-hooks" label="WireUi Hooks">
                <x-summary.item href="#hooks" label="Hooks" />
            </x-summary.header>
        </x-summary>
    </x-slot>

    <x-section.title id="wireui-hooks" href="#wireui-hooks" title="WireUi Hooks" />
    <div class="mt-3 prose max-w-none text-gray-500">
        <p>
            WireUI Hooks is a simple way to perform actions at determinate moments.
            It is possible to fire a notification when a Notification component is ready,
            or call a Livewire action when WireUi is loaded.
            See available hooks bellow
        </p>
    </div>

    <div></div>

    <x-section.title id="hooks" href="#hooks" title="Available Hooks" />
    <x-code language="js">
        Wireui.hook('load', () => console.log('wireui is ready to use'))

        Wireui.hook('notifications:load', () => {
            $wireui.notify({
                title: 'Profile saved!',
                description: 'Your profile was successfully saved',
                icon: 'success'
            })
        })

        Wireui.hook('dialog:load', () => {
            $wireui.dialog({
                title: 'Profile saved!',
                description: 'Your profile was successfully saved',
                icon: 'success'
            })
        })

        Or custom dialog hook

        Wireui.hook('dialog:custom:load', () => {})
    </x-code>
</div>
