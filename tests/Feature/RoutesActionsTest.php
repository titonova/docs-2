<?php

test('Routes: "Actions"', function ($route) {
    $this->get(route($route))
        ->assertOK();
})->with(function () {
    yield 'docs.notifications';
    yield 'docs.hooks';
    yield 'docs.dialogs';
});
