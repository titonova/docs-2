@props(['href', 'label'])

<div>
    <a @isset($href) href="{{ $href }}" @endisset class="font-semibold text-md text-gray-700 dark:text-gray-500">
        <span class="text-teal-600">#</span>
        {{ $label }}
    </a>

    @isset($slot)
        <ul class="pl-4 mt-1 text-gray-600 dark:text-gray-500 font-medium text-sm space-y-2">
            {{ $slot }}
        </ul>
    @endisset
</div>
