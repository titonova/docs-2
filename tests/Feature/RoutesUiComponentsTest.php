<?php

test('Routes: "UI Components"', function ($route) {
    $this->get(route($route))
        ->assertOK();
})->with(function () {
    yield 'docs.heroicons';
    yield 'docs.dropdown';
    yield 'docs.cards';
    yield 'docs.modal';
});

