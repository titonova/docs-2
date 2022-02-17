<?php

use App\Http\Livewire\SwitchVersion;

use function Pest\Livewire\livewire;

it('should render the versions and redirect', function () {
    $component = livewire(SwitchVersion::class, ['currentVersion' => SwitchVersion::VERSIONS['v1']]);

    foreach (SwitchVersion::VERSIONS as $version => $url) {
        $component->assertSee("Version {$version}");
    }

    $component
        ->set('currentVersion', SwitchVersion::VERSIONS['v0'])
        ->assertRedirect("https://v0.livewire-wireui.com/{$component->path}");
});
