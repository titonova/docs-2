<x-layouts.clean>
    <!-- mobile navbar & sidebar -->
    <div class="lg:hidden" x-cloak x-data="{
            sidebar: window.innerWidth > 1000,

            openSidebar()  { this.sidebar = true  },
            closeSidebar() { this.sidebar = false },
        }">
        <!-- navbar -->
        <header class="fixed z-20 top-0 left-0 w-full p-4 shadow-sm border-b bg-white
                     dark:bg-secondary-800 dark:border-secondary-700">
            <div class="flex justify-between items-center lg:max-w-7xl mx-auto">
                <button class="rounded-md bg-gray-50 p-1 inline-flex items-center justify-center
                               focus:outline-none text-gray-400 hover:text-gray-500 hover:bg-gray-100
                               focus:ring-2 focus:ring-inset focus:ring-indigo-500 dark:bg-secondary-700"
                    x-on:click="openSidebar"
                    type="button">
                    <span class="sr-only">Open sidebar</span>
                    <x-icon name="menu" class="h-6 w-6" />
                </button>

                <a href="{{ route('home') }}" class="font-extrabold text-teal-600 text-xl">
                    WireUI
                </a>

                <livewire:toggle-dark-mode />

                <a href="{{ config('links.wireui') }}" class="inline-flex items-center shadow-sm text-gray-400">
                    <x-icons.github-solid class="h-6 w-6" />
                </a>
            </div>
        </header>

        <!-- sidebar -->
        <div class="fixed inset-0 flex z-60 pointer-events-none" x-show="sidebar">
            <!-- sidebar overlay -->
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75 pointer-events-auto"
                x-on:click="closeSidebar"
                x-show="sidebar"
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                style="backdrop-filter: blur(3px)"
                :aria-hidden="!sidebar">
            </div>

            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-slate-100 pointer-events-auto dark:bg-secondary-900"
                x-show="sidebar"
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full">
                <div class="absolute top-0 right-0 -mr-10 pt-2"
                    x-show="sidebar"
                    x-on:click="closeSidebar"
                    x-transition:enter="ease-in-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in-out duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <button class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <x-icon name="x" class="h-6 w-6 text-white" />
                    </button>
                </div>

                <div class="shrink-0 flex justify-between items-center px-4 pb-4">
                    <a href="{{ route('home') }}" class="text-2xl text-teal-600 font-extrabold">
                        WireUI
                    </a>

                    <a href="{{ config('links.wireui') }}" class="inline-flex items-center shadow-sm text-gray-400">
                        <x-icons.github-solid class="h-6 w-6" />
                    </a>
                </div>

                <div class="flex flex-col mx-2 overflow-hidden rounded-xl shadow-soft border border-gray-100 bg-white dark:bg-secondary-800 dark:border-secondary-700"
                    style="height: 94vh">
                    <div class="h-full overflow-y-auto soft-scrollbar">
                        <ul class="flex flex-col w-full">
                            @foreach ($sidebarMenu as $link)
                                @isset($link['header'])
                                    <li class="">
                                        <span class="flex font-medium text-sm text-gray-400 px-3 mt-3 uppercase">
                                            {{ $link['header'] }}
                                        </span>
                                    </li>
                                @endisset

                                <li class="px-2">
                                    <a @class([
                                            'flex items-center h-12 px-4 rounded-lg text-gray-500 transition-colors ease-in-out duration-300',
                                            'font-medium bg-slate-100 border text-gray-800 dark:bg-secondary-700 dark:border-none dark:text-secondary-400' => $link['active'],
                                        ])
                                        href="{{ $link['route'] }}"
                                        @isset($link['target'])
                                            target="{{ $link['target'] }}"
                                        @endisset>
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="flex justify-end mt-2">
                    <livewire:switch-version />
                </div>
            </div>

            <!-- only to fit mobile sidebar -->
            <div class="shrink-0 w-10" aria-hidden="true"></div>
        </div>
    </div>

    <div class="max-w-3xl mx-auto lg:max-w-9xl lg:pl-4 lg:grid lg:grid-cols-12 lg:gap-8 dark:bg-secondary-800">
        <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
            <nav class="sticky top-4">
                <div class="shrink-0 flex justify-between items-center px-4 py-4">
                    <a href="{{ route('home') }}" class="text-2xl text-teal-600 font-extrabold">
                        WireUI
                    </a>
                    <a href="{{ config('links.wireui') }}" class="inline-flex items-center shadow-sm text-secondary-400">
                        <x-icons.github-solid class="lg:w-7 lg:h-7" />
                    </a>
                </div>

                <div id="desktop-sidebar" style="height: 87.5vh; direction: rtl" class="overflow-y-auto soft-scrollbar pb-2">
                    <ul style="direction: ltr" class="flex flex-col w-full">
                        @foreach ($sidebarMenu as $link)
                            @isset($link['header'])
                                <li class="mt-2">
                                    <span class="flex font-medium text-sm text-secondary-400 px-3 mt-3 uppercase">
                                        {{ $link['header'] }}
                                    </span>
                                </li>
                            @endisset

                            <li class="px-2">
                                <a @class([
                                        'flex items-center h-12 px-4 rounded-lg text-gray-600 transition-colors ease-in-out duration-300',
                                        'font-medium hover:text-gray-900 hover:underline',
                                        'mt-1 font-medium shadow-md border dark:border-0 bg-slate-50' => $link['active'],
                                        'dark:bg-secondary-700 text-gray-900 dark:text-secondary-200' => $link['active'],
                                        'dark:text-secondary-400/70' => !$link['active'],
                                    ])
                                    href="{{ $link['route'] }}"
                                    @isset($link['target'])
                                        target="{{ $link['target'] }}"
                                    @endisset>
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex justify-between py-2">
                    <livewire:toggle-dark-mode />
                    <livewire:switch-version />
                </div>
            </nav>
        </div>

        <main class="pt-16 flex flex-col sm:pt-18 lg:pt-0 lg:col-span-9 xl:col-span-8 xl:m-2 xl:p-4 xl:rounded-xl xl:border
                     xl:shadow-soft bg-white dark:bg-secondary-900 dark:border-secondary-700 dark:shadow-none
                     lg:dark:border-2 xl:dark:my-4"
            style="min-height: 98vh">
            <div class="p-4 sm:px-6 grow">
                {{ $slot }}
            </div>

            <!-- footer -->
            <footer class="mt-5">
                <div class="mx-auto pt-6 pb-6 px-3 sm:px-5 lg:px-4 lg:pb-4 xl:px-0 xl:pb-0 md:flex md:items-center md:justify-between">
                    <div class="flex justify-center space-x-6 md:order-2">
                        <a href="{{ config('links.wireui') }}" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">GitHub</span>
                            <x-icons.github class="h-6 w-6" />
                        </a>
                    </div>
                    <div class="text-center sm:text-left mt-4 md:mt-0 md:order-1 text-sm text-gray-600">
                        Code highlighting provided by
                        <a href="https://torchlight.dev" target="_blank" class="text-center font-semibold text-teal-600">
                            Torchlight
                        </a>
                    </div>
                </div>
            </footer>
        </main>

        <aside class="hidden xl:block xl:col-span-2">
            <div class="sticky top-4">
                <div class="xl:mx-auto">
                    <h3 class="text-sm uppercase mb-1 font-semibold text-gray-500 hidden xl:flex">
                        Page Sections
                    </h3>

                    @isset($summary)
                        {{ $summary }}
                    @endisset
                </div>
            </div>
        </aside>
    </div>
</x-layouts.clean>
