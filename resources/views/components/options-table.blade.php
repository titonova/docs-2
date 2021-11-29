@props(['available' => true])

@php $width = $available ? 'w-1/5' : 'w-1/4'; @endphp

<div {{ $attributes }}>
    <h3 class="text-sm uppercase mb-1 font-semibold text-gray-500">
        Options
    </h3>

    <div class="mt-2 border-2 rounded-lg pb-2 shadow-md border-gray-200 bg-white overflow-hidden relative
                dark:bg-secondary-800 dark:border-secondary-600">
        <div class="overflow-y-auto">
            <table class="w-full text-left border-collapse">
                <thead class="border-b-2 dark:border-secondary-700">
                    <tr>
                        <th class="{{ $width }} text-sm font-semibold text-gray-600 dark:text-gray-400 bg-white dark:bg-secondary-800 p-2">
                            Prop
                        </th>
                        <th class="{{ $width }} text-sm font-semibold text-gray-600 dark:text-gray-400 bg-white dark:bg-secondary-800 p-2">
                            Required
                        </th>
                        <th class="{{ $width }} text-sm font-semibold text-gray-600 dark:text-gray-400 bg-white dark:bg-secondary-800 p-2">
                            Default
                        </th>
                        <th class="{{ $width }} text-sm font-semibold text-gray-600 dark:text-gray-400 bg-white dark:bg-secondary-800 p-2">
                            Type
                        </th>

                        @if ($available)
                            <th class="w-1/5 text-sm font-semibold text-gray-600 dark:text-gray-400 bg-white dark:bg-secondary-800 p-2">
                                Available
                            </th>
                        @endif
                    </tr>
                </thead>

                <tbody class="align-baseline">
                   {{ $slot }}
                </tbody>
            </table>
        </div>
    </div>
</div>
