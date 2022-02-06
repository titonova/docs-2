@props(['message' => null])

<div class="flex items-center p-4 border rounded-lg gap-x-3 dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700">
    <x-icon name="information-circle" class="flex-shrink-0 w-5 h-5 text-blue-400" />

    <div class="text-sm text-blue-700 dark:text-blue-400">
        {{ $message ?? $slot }}
    </div>
</div>
