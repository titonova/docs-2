<?php

beforeEach(function () {
    /** @var Tests\TestCase $this */
    $this->fakeTorchlight();
});

test('Routes: "Form"', function ($route) {
    /** @var Tests\TestCase $this */
    $this->get(route($route))
        ->assertOK();
})->with(function () {
    yield 'docs.inputs';
    yield 'docs.errors';
    yield 'docs.textarea';
    yield 'docs.maskable-inputs';
    yield 'docs.phone-input';
    yield 'docs.currency-input';
    yield 'docs.toggle';
    yield 'docs.checkbox';
    yield 'docs.radio';
    yield 'docs.buttons';
    yield 'docs.datetime-picker';
    yield 'docs.time-picker';
});
