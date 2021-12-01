@props(['classes' => null])

<footer class="bg-white border-t border-gray-200 {{ $classes }}">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <a href="{{ config('links.wireui') }}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <x-icons.github class="h-6 w-6" />
            </a>
        </div>
        <div class="mt-4 md:mt-0 md:order-1">
            <p class="text-center text-base text-gray-400">
                &copy; 2021 WireUI Components.
            </p>
        </div>
    </div>
</footer>
