<div>
    <x-layouts.preloader />

    <div class="relative bg-blueGray-100 overflow-x-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full pointer-events-none" aria-hidden="true">
            <div class="relative h-full max-w-7xl mx-auto">
                <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                </svg>
            </div>
        </div>

        <!-- navbar -->
        <div class="relative pt-6 pb-16 sm:pb-24" x-data="{ mobileDropdown: false }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0 md:space-x-10">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="{{ route('home') }}" class="text-2xl font-extrabold text-teal-600">
                                Wire UI
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center
                                        text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none
                                        focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    :aria-expanded="mobileDropdown"
                                    x-on:click="mobileDropdown = true"
                                    type="button">
                                    <span class="sr-only">Open main menu</span>
                                    <x-icon name="menu" class="h-6 w-6" />
                                </button>
                            </div>
                        </div>

                        <div class="hidden md:flex md:space-x-10">
                            @foreach ($navbarLinks as $name => $link )
                                <a href="{{ $link }}" class="font-medium text-gray-500 hover:text-gray-900">
                                    {{ $name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                        <span class="inline-flex rounded-md shadow">
                            <a class="inline-flex items-center px-4 py-2 border border-transparent text-base
                                    font-medium rounded-md text-gray-600 bg-white transition-colors
                                    ease-in duration-100 hover:bg-gray-700 hover:text-white"
                                href="{{ config('links.wireui') }}">
                                <x-icons.github class="w-5 h-5 mr-1" />
                                GitHub
                            </a>
                        </span>
                    </div>
                </nav>
            </div>

            <!-- mobile dropdown -->
            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                x-transition:enter="duration-150 ease-out"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-10"
                x-transition:leave="duration-100 ease-in"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                x-cloak
                x-show="mobileDropdown"
                x-on:click.away="mobileDropdown = false">
                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <a href="{{ route('home') }}" class="text-2xl font-extrabold text-teal-600">
                                Wire UI
                            </a>
                        </div>
                        <div class="-mr-2">
                            <button class="bg-white rounded-md p-2 inline-flex items-center justify-center
                                        focus:outline-none text-gray-400 hover:text-gray-500 hover:bg-gray-100
                                        focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    x-on:click="mobileDropdown = false"
                                    type="button">
                                <span class="sr-only">Close main menu</span>
                                <x-icon name="x" class="h-6 w-6" />
                            </button>
                        </div>
                    </div>

                    <div class="px-2 pt-2 pb-3">
                        @foreach ($this->navbarLinks as $name => $link )
                            <a href="{{ $link }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                                {{ $name }}
                            </a>
                        @endforeach
                    </div>
                    <a class="w-full flex px-5 py-3 justify-center font-medium text-gray-600 bg-gray-50 hover:bg-gray-100"
                        href="{{ config('links.wireui') }}">
                        <x-icons.github class="w-5 h-5 mr-1" />
                        GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- wireui presentation -->
        <main class="mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-600 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Blade</span>
                    <span class="block text-teal-600 xl:inline">Components</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    A simple, fast and elegant way to add blade components
                    made with alpine.js and tailwind, ready to use, enjoy the ease.
                    Livewire components and Tall Stack components
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a class="w-full flex items-center justify-center px-8 py-3 border border-transparent
                                text-base font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700
                                md:py-4 md:text-lg md:px-10"
                            href="{{ route('docs.get-started') }}">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <!-- wireui features card -->
        <div class="relative py-8 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                <h2 class="text-xl font-semibold tracking-wider text-teal-600 uppercase">
                    Wire UI Features
                </h2>

                <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                    A set of reusable blade components for Tall Stack projects.
                    Form components, icons, alerts, modals and much more.
                    Simple, efficient and elegant
                </p>

                <div class="mt-12">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="pt-6">
                            <div class="flow-root border border-gray-100 shadow-soft bg-white rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-teal-500 rounded-md shadow-lg">
                                            <x-icon name="chip" class="h-6 w-6 text-white" />
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Heroicons</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        A set of 450+ free MIT-licensed high-quality SVG icons for you to use in your web projects.
                                        Available as basic SVG icons
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root border border-gray-100 shadow-soft bg-white rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-teal-500 rounded-md shadow-lg">
                                            <x-icon name="code" class="h-6 w-6 text-white" />
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Blade Components</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Reusable blade components to increase usability in your project.
                                        Beautiful notifications, icons, and form components to improve your code
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root border border-gray-100 shadow-soft bg-white rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-teal-500 rounded-md shadow-lg">
                                            <x-icon name="book-open" class="h-6 w-6 text-white" />
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Simple Documentation</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        A simple documentation with real life examples and details of usage.
                                        Code example and UI example
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- heroicons section -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 mb-10">
            <div class="bg-teal-700 rounded-lg shadow-soft overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                    <div class="lg:self-center">
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            <span class="block">Ready to enjoy Heroicons?</span>
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-blue-100">
                            All heroicons are available in blade components, ready to use with same names of heroicons.
                        </p>
                        <a href="{{ route('docs.heroicons') }}" class="mt-8 bg-white border border-transparent rounded-md shadow px-5 py-3 inline-flex
                            items-center text-base font-medium text-teal-700 hover:bg-teal-50">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="bg-white flex items-center p-5">
                    <img class="opacity-40" src="{{ asset('assets/images/heroicons-ui.png') }}" alt="Heroicons">
                </div>
            </div>
        </div>

        <!-- notifications section -->
        <div class="py-16 bg-gray-50 overflow-hidden lg:py-24">
            <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
                <div class="relative">
                    <h2 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-teal-600 sm:text-4xl">
                        Notifications Feature
                    </h2>
                    <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">
                        The simple and complete api to create many notifications for all use cases,
                        alert a completed action or ask if are sure to confirm action. Enjoy notifications.
                    </p>
                </div>

                <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                    <defs>
                        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                </svg>

                <div class="relative mt-12 sm:mt-16 lg:mt-24">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-2">
                            <h3 class="text-2xl font-extrabold text-teal-600 tracking-tight sm:text-3xl">
                                Notifications use case
                            </h3>
                            <p class="mt-3 text-lg text-gray-500">
                                Use notifications to confirm a particular action, or to claim that the action was successful.
                                Use as user or application notifications
                            </p>

                            <dl class="mt-10 space-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                            <x-icon name="bell" class="h-6 w-6" />
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-teal-600">Alert Notifications</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        Show an alert when the action to delete a record was successful, or even when a record was saved.
                                        Show an alert for anything
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                            <x-icon name="question-mark-circle" class="h-6 w-6" />
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-teal-600">Confirm Notifications</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        Before taking an action, ask the user if they are sure of this, set up an action for confirmation or rejection.
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                            <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                                <defs>
                                    <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                            </svg>
                            <img class="relative mx-auto" width="470" src="{{ asset('assets/images/notifications.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <livewire:home.form />
    </div>

    <x-layouts.footer />
</div>
