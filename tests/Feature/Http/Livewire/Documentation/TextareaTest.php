<?php

use App\Http\Livewire\Documentation\Textarea;

it('renders Newsletter component with torchlight')
    ->livewire(Textarea::class)
    ->assertSeeHtml('__torchlight')
    ->assertSeeHtml("Annotations\n</label>")
    ->assertSeeHtml('placeholder="write your annotations"');