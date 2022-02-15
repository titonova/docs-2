<?php

beforeEach(function () {
    /** @var Tests\TestCase $this */
    $this->fakeTorchlight();
});

test('Routes: "Actions"', function ($route) {
    /** @var Tests\TestCase $this */
    $this->get(route($route))
        ->assertOK();
})->with(function () {
    yield 'docs.notifications';
    yield 'docs.hooks';
    yield 'docs.dialogs';
});
