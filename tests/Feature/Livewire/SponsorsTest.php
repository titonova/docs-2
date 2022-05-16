<?php

use App\Http\Livewire\Sponsors;
use Livewire\Testing\TestableLivewire;

use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertFileExists;

it('should render the sponsors', function () {
    /** @var Sponsors|TestableLivewire $component */
    $component = livewire(Sponsors::class);

    foreach ($component->sponsors as $sponsor) {
        $component
            ->assertSee($sponsor['url'])
            ->assertSee($sponsor['label'])
            ->assertSee($sponsor['image']);

        assertFileExists(public_path($sponsor['image']));
    }
});
