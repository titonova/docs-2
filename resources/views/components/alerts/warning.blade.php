@props([
    'title'   => 'Attention',
    'message' => null,
])

<div class="flex items-start gap-x-3 rounded-lg border dark:border-0 shadow-soft bg-yellow-50 dark:bg-secondary-700 p-4">
    <x-icon name="exclamation" class="h-5 w-5 shrink-0 text-yellow-400" />

    <div class="break-all">
        <h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-400">
            {{ $title }}
        </h3>

        <div class="mt-2 text-sm text-yellow-700 dark:text-yellow-500">
            {{ $message ?? $slot }}
        </div>
    </div>
</div>
