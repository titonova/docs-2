<?php

test('Routes: "Getting Started" ', function ($route) {
    $this->get(route($route))
        ->assertOK();
})->with(function () {
    yield 'docs';
    yield 'docs.get-started';
    yield 'docs.changelog';
    yield 'docs.colors';
    yield 'docs.customization';
    yield 'docs.contributing';
});
