<div class="flex items-center gap-x-2" x-data="{
    dark: @entangle('dark'),

    browserDarkMode() {
        return window.matchMedia('(prefers-color-scheme: dark)').matches
    },
    enable() {
        window.localStorage.setItem('dark', true)
        document.body.classList.add('dark')
    },
    disable() {
        window.localStorage.setItem('dark', false)
        document.body.classList.remove('dark')
    },
    syncDarkMode() {
        this.dark ? this.enable() : this.disable()
    }
}"
x-init="function() {
    this.syncDarkMode()

    $watch('dark', dark => this.syncDarkMode())
}">
    <x-icon name="sun" class="w-5 h-5 text-gray-700 dark:text-secondary-200" />

    <x-toggle wire:model="dark" />

    <x-icon name="moon" class="w-5 h-5 text-gray-700 dark:text-secondary-200" />
</div>
