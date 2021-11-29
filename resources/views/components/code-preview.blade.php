@props([
    'title',
    'id',
    'href',
    'code',
    'language',
    'clean' => false
])

<div x-data="{ showCode: false }" @isset($id) id="{{ $id }}" @endisset>
    <div class="flex justify-between items-center">
        <a href="{{ $href }}" class="truncate text-gray-700 dark:text-gray-400 font-medium pr-2">
            {{ $title }}
        </a>

        <div class="flex p-0.5 rounded-md bg-gray-200 dark:bg-secondary-700"
            :class="{
                'pr-1s': !showCode,
                'pl-1s':  showCode,
            }">
            <button class="focus:outline-none overflow-hidden rounded-md p-1 sm:px-2 transition-colors duration-200 ease-in flex items-center"
                :class="{
                    'bg-white dark:bg-secondary-700 text-teal-500': !showCode,
                    'text-gray-400'        :  showCode
                }"
                type="button"
                x-on:click="showCode = false">
                <x-icon name="eye" class="w-5 h-5 mr-1" />
                <span :class="{ 'hidden sm:flex': showCode, 'pr-0.5': !showCode }">
                    Preview
                </span>
            </button>
            <button class="focus:outline-none overflow-hidden rounded-md p-1 sm:px-2 transition-colors duration-200 ease-in flex items-center"
                :class="{
                    'bg-white dark:bg-secondary-700 text-teal-500':  showCode,
                    'text-gray-400': !showCode
                }"
                type="button"
                x-on:click="showCode = true">
                <x-icon name="code" class="w-5 h-5 mr-1" />
                <span :class="{ 'hidden sm:flex': !showCode, 'pr-0.5': showCode }">
                    Code
                </span>
            </button>
        </div>
    </div>

    <div @class([
        'mt-3',
        'shadow-md dark:shadow-none border-2 dark:border-0 rounded-lg' => !$clean
    ])>
       <div x-show="!showCode" @class(['bg-white dark:bg-secondary-800 p-6 rounded-lg' => !$clean])>
            {{ $slot }}
       </div>
       <div x-cloak x-show="showCode">
           <x-code :language="$language" :code="$code" />
       </div>
    </div>
</div>
