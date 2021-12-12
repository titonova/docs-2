@props(['classes' => null])

<footer class="bg-white border-t border-gray-200 {{ $classes }}">
    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <a href="{{ config('links.wireui') }}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <x-icons.github class="w-6 h-6" />
            </a>
        </div>
        <div class="mt-4 md:mt-0 md:order-1">
            <p class="text-base text-center text-gray-400">
                &copy; {{ now()->year }} WireUI Components.
            </p>
        </div>
    </div>
</footer>
