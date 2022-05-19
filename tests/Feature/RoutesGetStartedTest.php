<?php

beforeEach(function () {
    /** @var Tests\TestCase $this */
    $this->fakeTorchlight();
});

test('Routes: "Getting Started" ', function ($route) {
    /** @var Tests\TestCase $this */
    $this->get(route($route))
        ->assertOK();
})->with(function () {
    yield 'docs.index';
    yield 'docs.get-started';
    yield 'docs.changelog';
    yield 'docs.colors';
    yield 'docs.customization';
    yield 'docs.contributing';
    yield 'docs.troubleshooting';
    yield 'docs.livewire-usage';
});
