<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#dialogs" label="Dialogs">
                <x-summary.item href="#first-steps" label="First Steps" />
                <x-summary.item href="#javascript-dialog" label="JavaScript Dialog" />
                <x-summary.item href="#livewire-dialog" label="Livewire Dialog" />
                <x-summary.item href="#alert-dialog" label="Alert Dialog" />
                <x-summary.item href="#confirm-dialog" label="Confirm Dialog" />
                <x-summary.item href="#confirm-directive" label="Confirm Directive" />
                <x-summary.item href="#custom-dialog" label="Custom Dialog" />
            </x-summary.header>

            <x-summary.header href="#dialog-options" label="Dialog Options" />
            <x-summary.header href="#playground" label="Playground" />
        </x-summary>
    </x-slot>

    <div>
        <x-section.title id="dialogs" href="#dialogs" title="Dialogs" />

        <div class="mt-5 prose text-gray-500 xl:max-w-3xl xl:mb-8">
            <div class="mt-5 prose text-gray-500 max-w-none xl:mb-8">
                <p>
                    The WireUI dialog API is designed to show alerts and dialog confirmation.
                    Dialogs use livewire events to work.
                    You can customize a dialog however you like.
                </p>
                <p>
                    Example case use:
                </p>
                <ul>
                    <li>Alert succeced action</li>
                    <li>Confirm an action</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="first-steps">
        <x-section.title href="#first-steps" title="First Steps" />
        <div class="mt-5 text-gray-500">
            <p class="mt-6 mb-1">Now add the component to layout</p>
            <x-code language="html" :code="$addComponentExample" />

            <div class="flex items-center p-4 mt-4 border rounded-lg gap-x-3 dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700">
                <x-icon name="information-circle" class="flex-shrink-0 w-5 h-5 text-blue-400" />

                <p class="text-sm text-blue-700 dark:text-blue-400">
                    Tip: The <b>dialog</b> has all <b>modal</b> options. You can define globals or individuals
                </p>
            </div>
        </div>
    </div>

    <div id="javascript-dialog">
        <x-section.title href="#javascript-dialog" title="JavaScript Dialog" />
        <p class="mt-5 mb-1 text-gray-500">
            Dialogs can be created directly via JavaScript
        </p>
        <x-code language="js" :code="$javascriptExample" />
    </div>

    <div id="livewire-dialog">
        <x-section.title href="#livewire-dialog" title="Livewire Dialog" />
        <p class="mt-5 mb-1 text-gray-500">
            Dialogs can be created directly from Livewire Component
        </p>
        <x-code language="php" :code="$livewireExample" />
    </div>

    <div id="alert-dialog">
        <x-section.title href="#alert-dialog" title="Alert Dialog" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                Sometimes you may want to inform the user that an action has been successful,
                or it cannot be completed, even a simple warning, the dialog API allows for this easily.
                See the example below.
            </p>

            <div class="flex flex-col gap-y-2 lg:flex-row lg:gap-x-2">
                <x-button
                    positive
                    onclick="$wireui.dialog({
                        title: 'Success Dialog',
                        description: 'This is a description',
                        icon: 'success',
                    })">
                    Success Dialog
                </x-button>

                <x-button
                    negative
                    onclick="$wireui.dialog({
                        title: 'Error Dialog',
                        description: 'Woops, its an error',
                        icon: 'error',
                    })">
                    Error Dialog
                </x-button>

                <x-button
                    info
                    onclick="$wireui.dialog({
                        title: 'Info Dialog',
                        description: 'This is a description',
                        icon: 'info',
                    })">
                    Info Dialog
                </x-button>
            </div>
        </div>

        <p class="mt-4 mb-1 text-gray-500">The options needed to create such a notification are:</p>
        <x-code language="ts" :code="<<<EOT
        {
            title: 'Notification Title',
            description: 'It can be nullable too',
            icon: 'success'
        }
        EOT" />
    </div>

    <div id="confirm-dialog">
        <x-section.title href="#confirm-dialog" title="Confirm Dialog" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                You may also want to ask the user for a confirmation of a certain action,
                the dialog API has a special way for that. See the example below.
            </p>

            <x-button
                primary
                onclick="$wireui.confirmDialog({
                    title: 'Are you Sure?',
                    description: 'Save the information?',
                    icon: 'question',
                    accept: {
                        label: 'Yes, save it',
                        execute: () => window.$wireui.notify({
                            'title': 'You confirmed',
                            'icon': 'success'
                        })
                    },
                    reject: {
                        label: 'No, cancel',
                        execute: () => window.$wireui.notify({
                            'title': 'You not confirmed',
                            'icon': 'error'
                        })
                    }
                })">
                Save Information
            </x-button>
        </div>

        <p class="mt-6 mb-1 text-gray-500">You can create a confirmation notification through the Livewire Component</p>
        <x-code language="php" :code="$livewireConfirmExample" />

        <p class="mt-6 mb-1 text-gray-500">You can create a confirmation notification via javascript</p>
        <x-code language="js" :code="$javascriptConfirmExample" />
    </div>

    <div id="confirm-directive">
        <x-section.title href="#confirm-directive" title="Confirm Directive" />

        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                Alternatively, you can use a html directive to create a confirmation dialog <br>
                Blade components do not support <b>@bladeDirectives</b>
            </p>
        </div>

        <p class="mt-4 mb-1 text-gray-500">You use it in alpinejs component</p>
        <x-code language="html" :code="$confirmDirectiveAlpineJs" />

        <p class="mt-6 mb-1 text-gray-500">And use it in pure html</p>
        <x-code language="html" :code="$confirmDirectiveHtml" />
    </div>

    <div id="dialog-events">
        <x-section.title href="#dialog-events" title="Dialog Events" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                Dialog can have 3 events, onClose, onDismiss and onTimeout.
                Each event will be triggered when they happen.
            </p>

            <p class="leading-none">Events:</p>
            <ul>
                <li>
                    The <b>onClose</b> event will be called whenever the dialog has been removed,
                    that is, when the time is up, when the user closes and when an action is clicked
                </li>
                <li>The <b>onDismiss</b> event will be triggered whenever the user removes the dialog</li>
                <li>The <b>onTimeout</b> event will fire every time the dialog runs out.</li>
            </ul>
        </div>

        <p class="mb-1 text-gray-500">
            You can create events via javascript using closure
        </p>
        <x-code language="js" :code="<<<EOT
        {
            onClose:   () => alert('onClose is fired'),
            onDismiss: () => alert('onDismiss is fired'),
            onTimeout: () => alert('onTimeout is fired'),
        }
        EOT" />

        <p class="mt-6 mb-1 text-gray-500">
            Or use the events to call actions on the Livewire Component,
            in which case the component ID is required
        </p>
        <x-code language="js" :code="<<<EOT
        window.\$wireui.dialog({
            ...
            onClose: {
                method: 'firedEvent',
                params: 'onClose'
            },
            onDismiss: {
                method: 'firedEvent',
                params: { event: 'onDismiss'}
            },
            onTimeout: {
                method: 'firedEvent',
                params: ['onTimeout', 'more value']
            },
        }, livewireComponentId)
        EOT" />

        <p class="mt-6 mb-1 text-gray-500">
            Events can also be used for notifications created by the Livewire Component
        </p>
        <x-code language="php" :code="$phpEventsExample" />
    </div>

    <div x-data="{ name: '', setName(event) { this.name = event.detail } }" x-on:set-name="setName" class="space-y-4" id="custom-dialog">
        <x-dialog id="custom" title="User information" description="Complete your profile, give your name">
            <div class="py-2" x-data="{}">
                <x-input label="What's your name?" placeholder="your name bro" x-on:input="$dispatch('set-name', $event.target.value)" />
            </div>
        </x-dialog>

        <x-section.title href="#custom-dialog" title="Custom Dialog" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                You can create dialogs with custom title, description or any code in slot
            </p>
        </div>

        <x-button
            primary
            x-on:click="$wireui.confirmDialog({
                id: 'custom',
                icon: 'question',
                accept: {
                    label: 'Yes, save it',
                    execute: () => window.$wireui.notify({
                        'title': 'Profile name saved',
                        'description': `Good by, ${name}`,
                        'icon': 'success'
                    })
                },
                reject: {
                    label: 'No, cancel',
                    execute: () => window.$wireui.notify({
                        'title': 'You not confirmed',
                        'description': `Good by, ${name}`,
                        'icon': 'error'
                    })
                }
            })">
            Show Custom confirm dialog
        </x-button>

        <x-code language="blade" :code="$customConfirmDialog" />
    </div>

    <div id="dialog-options">
        <x-section.title href="#dialog-options" title="Dialog Options" />
        <x-options-table class="w-full mt-2 mb-6">
            <x-option-table-row prop="id" required="false" default="none" type="string" available="--" />
            <x-option-table-row prop="title" required="false" default="none" type="string" available="--" />
            <x-option-table-row prop="description" required="false" default="none" type="string" available="--" />
            <x-option-table-row prop="icon" required="false" default="none" type="string" available="icon | all heroicons" />
            <x-option-table-row prop="iconColor" required="false" default="none" type="string" available="tailwind text colors" />
            <x-option-table-row prop="iconBackground" required="false" default="none" type="string" available="tailwind bg colors" />
            <x-option-table-row prop="timeout" required="false" default="none" type="number" available="--" />
            <x-option-table-row prop="style" required="false" default="center" type="string" available="center|inline" />
            <x-option-table-row prop="close" required="false" default="none" type="string | Button" available="--" />
            <x-option-table-row prop="closeButton" required="false" default="true" type="boolean" available="--" />
            <x-option-table-row prop="progressbar" required="false" default="true" type="boolean" available="--" />
        </x-options-table>

        <div class="space-y-4">
            <div>
                <b>Button</b>
                <x-code language="ts" :code="<<<EOT
                Button {
                    label: string
                    color?: Color
                    size?: Size
                    rounded?: boolean
                    squared?: boolean
                    bordered?: boolean
                    flat?: boolean
                    icon?: string
                    rightIcon?: string
                }
                EOT" />
            </div>

            <div>
                <b>Action options</b>
                <x-code language="ts" :code="<<<EOT
                Color = 'primary' | 'secondary' | 'positive' | 'negative' |
                        'warning' | 'info' | 'dark'
                ActionOptions extends Button {
                    label?: string
                    method?: string
                    params?: any
                    url?: string
                    execute?: CallableFunction
                }
                EOT" />
            </div>

            <div>
                <b>Icons</b>
                <x-code language="text" code="success | error | info | warning | question" />
            </div>

            <div>
                <b>Events</b>
                <x-code language="text" :code="<<<EOT
                onClose | onDismiss | onTimeout

                EventOptions {
                    method?: string
                    params?: any
                    url?: string
                }
                EOT" />
            </div>
        </div>
    </div>

    <div id="playground" class="space-y-4" x-data="{
        options: `{
    title: 'Playground Title',
    description: 'testing in playground',
    icon: 'success',
    // close: 'Ok',
    close: {
        label: 'Ok',
        positive: true
    }
}`,
        addDialog() {
            if (!this.options.trim()) return

            try {
                const options = eval(`(${this.options})`)
                options.accept
                    ? $wireui.confirmDialog(options)
                    : $wireui.dialog(options)
            } catch (e) {
                window.$wireui.dialog({
                    icon: 'error',
                    title: 'Invalid Options!',
                    description: `Make sure if options are valid object \n Error: ${e.message}`
                })
            }
        }
    }">
        <x-section.title href="#playground" title="Playground" />

        <x-card class="space-y-4">
            <div>
                <label for="playground-form" class="text-sm text-gray-600 dark:text-gray-400">
                    Add js dialog options
                </label>
                <x-textarea
                    x-model="options"
                    id="playground-form"
                    rows="6"
                />
            </div>

            <x-button x-on:click="addDialog" class="w-full" primary label="Show Dialog" />
        </x-card>
    </div>
</div>
