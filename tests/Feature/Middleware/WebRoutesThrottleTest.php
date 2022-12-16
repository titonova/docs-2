<?php

use function Pest\Laravel\get;

it('should block more than 30 requests per minute for a user', function () {
    test()->fakeTorchlight();

    for ($i = 0; $i < 5; $i++) {
        get(route('home'))->assertOk();
        get(route('docs.avatar'))->assertOk();
        get(route('docs.dialogs'))->assertOk();
        get(route('docs.select'))->assertOk();
        get(route('docs.notifications'))->assertOk();
        get(route('docs.cards'))->assertOk();
    }

    get(route('docs.buttons'))->assertStatus(429);
});
