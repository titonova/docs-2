<?php

namespace Tests\Unit\Components;

use App\Http\Livewire\Documentation\GetStarted;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class CodeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->fakeTorchlight();
    }

    /** @test */
    public function it_should_make_the_code_blocks()
    {
        $this->blade('<x-code language="php">echo "hello world";</x-code>')
            ->assertSee('<pre >##PRE_TL_COMPONENT##', escape: false)
            ->assertSee('##POST_TL_COMPONENT##</pre>', escape: false);
    }

    /** @test */
    public function it_should_render_the_highlighted_code()
    {
        Route::get('test-code', GetStarted::class);

        $this->get('/test-code')
            ->assertSee('<pre ><code data-theme="material-theme-palenight" data-lang="shell" class="torchlight" style="background-color: #000000;"><div class="highlighted">// torchlight! {"lineNumbers":false}', escape: false)
            ->assertSee('composer require wireui/wireui</div></code></pre>', escape: false);
    }
}
