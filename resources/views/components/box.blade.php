@props(['attention' => false,'info' => false])

@if ($attention)
    <div class="flex items-start gap-x-3 rounded-lg border dark:border-0 shadow-soft bg-yellow-50 dark:bg-secondary-700 p-4">
        <x-icon name="exclamation" class="h-5 w-5 shrink-0 text-yellow-400" />
        <div>
            <h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-400">
                Attention
            </h3>
            <div class="mt-2 text-sm text-yellow-700 dark:text-yellow-500">
                <p>{{ $slot }}</p>
            </div>
        </div>
    </div>
@endif

@if ($info)
    <div class="flex items-center p-4 border rounded-lg gap-x-3 dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700">
        <x-icon name="information-circle" class="flex-shrink-0 w-5 h-5 text-blue-400" />
        <p class="text-sm text-blue-700 dark:text-blue-400">
        {{ $slot }}
        </p>
    </div>
@endif