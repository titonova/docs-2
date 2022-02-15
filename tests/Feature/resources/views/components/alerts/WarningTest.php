<?php

it('should render the slot content', function () {
    $this->blade('<x-alerts.warning>WireUI is amazing!</x-alerts.warning>')
        ->assertSeeText('WireUI is amazing!');
});

it('should render the default title prop', function () {
    $this->blade('<x-alerts.warning />')->assertSeeText('Attention');
});

it('should render the title prop', function () {
    $this->blade('<x-alerts.warning title="WireUI is easy" />')
        ->assertSeeText('WireUI is easy');
});

it('should render the message prop', function () {
    $this->blade('<x-alerts.warning message="I love the WireUI <3" />')
        ->assertSeeText('I love the WireUI <3');
});
