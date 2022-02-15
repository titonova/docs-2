<?php

namespace Tests;

use Illuminate\Foundation\Testing;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

abstract class TestCase extends Testing\TestCase
{
    use CreatesApplication;

    /**
     * Fake the Torchlight component.
     * This function is similar to original torchlight test in package.
     * @see https://github.com/torchlight-api/torchlight-laravel/blob/main/tests/BaseTest.php#L49
     */
    public function fakeTorchlight(): void
    {
        Http::fake([
            'api.torchlight.dev/*' => function (Request $request) {
                $response = [];

                foreach ($request->data()['blocks'] as $block) {
                    $highlighted = "<div class=\"highlighted\">{$block['code']}</div>";

                    $response[] = array_merge($block, [
                        'classes' => 'torchlight',
                        'styles'  => 'background-color: #000000;',
                        'attrs'   => [
                            'data-theme' => $block['theme'],
                            'data-lang'  => $block['language'],
                        ],
                        'wrapped'     => "<pre><code>{$highlighted}</code></pre>",
                        'highlighted' => $highlighted,
                    ]);
                }

                return Http::response([
                    'duration' => 100,
                    'engine'   => 1,
                    'blocks'   => $response,
                ], 200);
            },
        ]);
    }
}
