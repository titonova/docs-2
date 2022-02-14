<?php

it('should render the slot content', function () {
    $this->blade('<x-alerts.info>WireUI is amazing!</x-alerts.info>')
        ->assertSeeText('WireUI is amazing!');
});

it('should render the message prop', function () {
    $this->blade('<x-alerts.info message="I love the WireUI <3" />')
        ->assertSeeText('I love the WireUI <3');
});
