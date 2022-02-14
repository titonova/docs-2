<?php

it('should render the slot content', function () {
    $view = $this->blade('<x-alerts.info>WireUI is amazing!</x-alerts.info>');

    $view->assertSee('WireUI is amazing!');
});
