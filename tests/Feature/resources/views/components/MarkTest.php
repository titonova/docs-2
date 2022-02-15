<?php

test('x-mark component must highlights the text', function () {
    /** @var \Illuminate\Testing\TestView $view */
    $view = $this->blade('Run <x-mark>composer install</x-mark>');

    $view->assertSeeText('Run composer install')
        ->assertSee('Run <span class="', $escaped = false);
});
