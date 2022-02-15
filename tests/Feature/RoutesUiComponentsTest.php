<?php

beforeEach(function () {
    /** @var Tests\TestCase $this */
    $this->fakeTorchlight();
});

test('Routes: "UI Components"', function ($route) {
    /** @var Tests\TestCase $this */
    $this->get(route($route))
        ->assertOK();
})->with(function () {
    yield 'docs.heroicons';
    yield 'docs.dropdown';
    yield 'docs.cards';
    yield 'docs.modal';
});

