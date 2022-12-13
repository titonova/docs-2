<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#notifications" label="Notifications">
                <x-summary.item href="#first-steps" label="First Steps" />
                <x-summary.item href="#javascript-notification" label="JavaScript Notification" />
                <x-summary.item href="#livewire-notification" label="Livewire Notification" />
                <x-summary.item href="#alert-notifications" label="Alert Notifications" />
                <x-summary.item href="#confirm-notifications" label="Confirm Notifications" />
                <x-summary.item href="#notification-events" label="Notification Events" />
                <x-summary.item href="#notification-options" label="Notification Options" />
                <x-summary.item href="#playground" label="Playground" />
            </x-summary.header>
            <x-summary.header href="#publishing" label="Publishing" />
        </x-summary>
    </x-slot>

    <div id="notifications">
        <x-section.title title="Notifications" />
        <div class="mt-5 prose text-gray-500 max-w-none xl:mb-8">
            <p>
                The WireUI notification API is designed to show alerts, notifications and action confirmations.
                Notifications use Livewire events to work.
                You can customize a notification however you like.
            </p>
            <p>
                Example use cases:
            </p>
            <ul>
                <li>Alert succeced action</li>
                <li>Confirm an action</li>
                <li>User notification</li>
                <li>Message notifications</li>
            </ul>
        </div>
    </div>

    <div id="first-steps">
        <x-section.title href="#first-steps" title="First Steps" />
        <div class="mt-5 text-gray-500">
            <p class="mt-6 mb-1">Add the component to the layout</p>
            <x-code language="html" :contents="$addComponentNotificationExample" />
        </div>
    </div>

    <div id="javascript-notification">
        <x-section.title href="#javascript-notification" title="JavaScript Notification" />
        <p class="mt-5 mb-1 text-gray-500">
            Notifications can be created directly via JavaScript
        </p>
        <x-code language="js" :contents="$javascriptNotificationExample" />
    </div>

    <div id="livewire-notification">
        <x-section.title href="#livewire-notification" title="Livewire Notification" />
        <p class="mt-5 mb-1 text-gray-500">
            Notifications can be created directly from a Livewire Component
        </p>
        <x-code language="php" :contents="$livewireNotificationExample" />
    </div>

    <div id="alert-notifications">
        <x-section.title href="#alert-notifications" title="Alert Notifications" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                Sometimes you may want to inform the user that an action has been successful,
                or it cannot be completed, or even a simple warning. The notifications API allows for this easily.
                See the example below.
            </p>

            <div class="flex flex-col gap-y-2 lg:flex-row lg:gap-x-2">
                <x-button
                    positive
                    onclick="$wireui.notify({
                        title: 'Success Notification',
                        description: 'This is a description',
                        icon: 'success',
                    })">
                    Success Notification
                </x-button>

                <x-button
                    negative
                    onclick="$wireui.notify({
                        title: 'Error Notification',
                        description: 'Woops, its an error',
                        icon: 'error',
                    })">
                    Error Notification
                </x-button>

                <x-button
                    primary
                    onclick="$wireui.notify({
                        title: 'Info Notification',
                        description: 'This is a description',
                        icon: 'info',
                    })"
                    type="button">
                    Info Notification
                </x-button>
            </div>
        </div>

        <p class="mt-4 mb-1 text-gray-500">The options needed to create such a notification are:</p>
        <x-code language="ts">
            {
                title: 'Notification Title',
                description: 'It can be nullable too',
                icon: 'success'
            }
        </x-code>
    </div>

    <div id="confirm-notifications">
        <x-section.title href="#confirm-notifications" title="Confirm Notifications" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                You may also want to ask the user for a confirmation of a certain action.
                The Notifications API has a special way for that. See the example below.
            </p>

            <x-button
                primary
                onclick="$wireui.confirmNotification({
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

        <p class="mt-4 mb-1 text-gray-500">You can create a confirmation notification by the blade</p>
        <x-code language="html" :contents="$bladeConfirmExample" />
        <br/>
        <x-alerts.warning>
            This directive does not work on a blade component, like the <b>x-button</b>
        </x-alerts.warning>

        <p class="mt-6 mb-1 text-gray-500">You can create a confirmation notification through the Livewire Component</p>
        <x-code language="php" :contents="$livewireConfirmExample" />

        <p class="mt-6 mb-1 text-gray-500">You can create a confirmation notification via JavaScript</p>
        <x-code language="js" :contents="$javascriptConfirmExample" />
    </div>

    <div id="notification-events">
        <x-section.title href="#notification-events" title="Notifications Events" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                Notifications can have 3 events: onClose, onDismiss and onTimeout.
                Each event will be triggered when they happen.
            </p>

            <p class="leading-none">Events:</p>
            <ul>
                <li>
                    The <b>onClose</b> event will be called whenever the notification has been removed,
                    that is, when the time is up, when the user closes and when an action is clicked
                </li>
                <li>The <b>onDismiss</b> event will be triggered whenever the user removes the notification</li>
                <li>The <b>onTimeout</b> event will fire every time the notification runs out.</li>
            </ul>
        </div>

        <p class="mb-1 text-gray-500">
            You can create events via JavaScript using a closure
        </p>
        <x-code language="js">
            {
                onClose:   () => alert('onClose is fired'),
                onDismiss: () => alert('onDismiss is fired'),
                onTimeout: () => alert('onTimeout is fired'),
            }
        </x-code>

        <p class="mt-6 mb-1 text-gray-500">
            Or use the events to call actions on the Livewire Component,
            in which case the component ID is required
        </p>
        <x-code language="js">
            window.\$wireui.notify({
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
        </x-code>

        <p class="mt-6 mb-1 text-gray-500">
            Events can also be used for notifications created by the Livewire Component
        </p>
        <x-code language="php" :contents="$phpEventsExample" />
    </div>

    <div id="notification-options">
        <x-section.title href="#notification-options" title="Notifications Options" />
        <x-options-table class="mt-2 mb-6" :available="false">
            <x-option-table-row prop="title" required="false" default="none" type="string" />
            <x-option-table-row prop="description" required="false" default="none" type="string" />
            <x-option-table-row prop="icon" required="false" default="none" type="NotificationIcon|all heroicons" />
            <x-option-table-row prop="iconColor" required="false" default="none" type="string" />
            <x-option-table-row prop="img" required="false" default="none" type="string" />
            <x-option-table-row prop="closeButton" required="false" default="true" type="boolean" />
            <x-option-table-row prop="timeout" required="false" default="8500" type="int" />
            <x-option-table-row prop="dense" required="false" default="none" type="boolean" />
            <x-option-table-row prop="rightButtons" required="false" default="false" type="boolean" />
            <x-option-table-row prop="progressbar" required="false" default="true" type="boolean" />
            <x-option-table-row prop="params" required="false" default="none" type="any" />
            <x-option-table-row prop="method" required="false" default="none" type="string" />
            <x-option-table-row prop="emit" required="false" default="none" type="string" />
            <x-option-table-row prop="to" required="false" default="none" type="string" />
            <x-option-table-row prop="accept" required="false" default="none" type="NotificationAction" />
            <x-option-table-row prop="reject" required="false" default="none" type="NotificationAction" />
            <x-option-table-row prop="acceptLabel" required="false" default="none" type="string" />
            <x-option-table-row prop="rejectLabel" required="false" default="none" type="string" />
            <x-option-table-row prop="onClose" required="false" default="none" type="NotificationEvent|js closure" />
            <x-option-table-row prop="onDismiss" required="false" default="none" type="NotificationEvent|js closure" />
            <x-option-table-row prop="onTimeout" required="false" default="none" type="NotificationEvent|js closure" />
        </x-options-table>

        <div>
            <h3 class="mb-1 text-sm font-semibold text-gray-500 uppercase">
                Custom Types
            </h3>

            <h3 class="mt-3 mb-1 text-sm font-semibold text-gray-500 uppercase">
                Notification Icon
            </h3>
            <x-code copy='false' :line-numbers="false" language="ts" contents="'success'|'error'|'info'|'warning'|'question'" />

            <h3 class="mt-4 mb-1 text-sm font-semibold text-gray-500 uppercase">
                Notification Action
            </h3>
            <x-code language="ts">
                {
                    label: string
                    style?: string
                    solid?: boolean
                    url?: string
                    execute?: closure
                    method?: string
                    params?: any
                }
            </x-code>

            <h3 class="mt-4 mb-1 text-sm font-semibold text-gray-500 uppercase">
                Notification Event
            </h3>

            <x-code language="js">
                {
                    url?: string
                    method?: string
                    params?: any
                }
            </x-code>
        </div>
    </div>

    <div id="playground">
        <x-section.title href="#playground" title="🪁 Playground" />

        <div class="bg-slate-100 dark:bg-secondary-800 dark:border-secondary-700 shadow rounded-lg border px-4 py-2 mt-4" x-data="{
            options: `{
title: 'Playground Title',
description: 'testing in the playground',
icon: 'success',
}`,
            addNotification() {
                if (!this.options.trim()) return

                try {
                    window.$wireui.notify(eval(`(${this.options})`))
                } catch (e) {
                    window.$wireui.notify({
                        icon: 'error',
                        title: 'Invalid Options!',
                        description: `Make sure if options are valid object \n Error: ${e.message}`
                    })
                }
            }
        }">
            <div class="w-full">
                <label for="playground" class="text-sm text-gray-600 dark:text-gray-400">
                    Add js notification options
                </label>
                <x-textarea
                    id="playground"
                    x-model="options"
                    rows="6"
                />
            </div>

            <button class="inline-flex items-center justify-center w-full px-3 py-2 mt-3 text-sm font-medium leading-4 text-white bg-teal-600 border border-transparent rounded-md shadow-sm focus:ring-teal-500 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2"
                x-on:click="addNotification"
                type="button">
                Add Notification
            </button>
        </div>
    </div>

    <div id="publishing">
        <x-section.title href="#publishing" title="Publishing" />
        <div class="mt-5 prose text-gray-500 max-w-none">
            <p>
                You can customize notification layout and styles publishing resources
            </p>

            <x-code :line-numbers="false" language="bash" contents="php artisan vendor:publish --tag='wireui.resources'" />
        </div>
    </div>
</div>
