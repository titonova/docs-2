<?php

test('x-code renders with Torchlight', function () {
    $view = $this->blade('<x-code language="shell" code="composer require wireui/wireui" />');

    $view->assertSeeInOrder([
        '<pre >',
        '##PRE_TL_COMPONENT##',
        '<code __torchlight-block',
    ], $escaped = false);
});

test('x-mark: highlights the text', function () {
    $view = $this->blade('Run <x-mark>composer install</x-mark>');

    $view->assertSee('Run <span class="px-2 py-2 font-mono text-sm font-semibold text-gray-900 bg-teal-100 rounded-md">composer install</span>', $escaped = false);
});

test('x-box info renders correctly', function () {
    $view = $this->blade('<x-box info>Tip: you can do foo</x-box>');

    $view->assertSeeInOrder([
        '<div class="flex items-center p-4 border rounded-lg gap-x-3 dark:border-0 shadow-soft bg-blue-50 dark:bg-secondary-700">',
        '<svg class="flex-shrink-0 w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">',
        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />',
        '</svg>',
        '<p class="text-sm text-blue-700 dark:text-blue-400">',
        'Tip: you can do foo',
        '</p>',
        '</div>',
    ], $escaped = false);
});

test('x-box attention renders correctly', function () {
    $view = $this->blade('<x-box attention>Do not delete index.php</x-box>');

    $view->assertSeeInOrder([
        '<div class="flex items-start gap-x-3 rounded-lg border dark:border-0 shadow-soft bg-yellow-50 dark:bg-secondary-700 p-4">',
        '<svg class="h-5 w-5 shrink-0 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">',
        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />',
        '</svg>',
        '<div>',
        '<h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-400">',
        'Attention',
        '</h3>',
        '<div class="mt-2 text-sm text-yellow-700 dark:text-yellow-500">',
        '<p>Do not delete index.php</p>',
        '</div>',
        '</div>',
        '</div>',
    ], $escaped = false);
});