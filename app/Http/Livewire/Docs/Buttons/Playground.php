<?php

namespace App\Http\Livewire\Docs\Buttons;

use Illuminate\Support\Facades\File;
use Illuminate\Support\{Collection, Str};
use Livewire\Component;
use Symfony\Component\Finder\SplFileInfo;

/** @property-read string $buttonCode */
class Playground extends Component
{
    public ?string $label = 'Button';

    public string $style = 'default';

    public string $color = 'default';

    public string $size = 'default';

    public ?string $icon = null;

    public ?string $rightIcon = null;

    public function getButtonCodeProperty(): string
    {
        $attributes = collect([
            'label'     => ['allow-default' => true,  'default' => 'Button',  'attr' => 'label'],
            'style'     => ['allow-default' => false, 'default' => 'default', 'attr' => false],
            'color'     => ['allow-default' => false, 'default' => 'default', 'attr' => false],
            'size'      => ['allow-default' => false, 'default' => 'default', 'attr' => false],
            'icon'      => ['allow-default' => false, 'default' => null,      'attr' => 'icon'],
            'rightIcon' => ['allow-default' => false, 'default' => null,      'attr' => 'right-icon'],
        ])->filter(function (array $options, string $attribute) {
            if (!$this->{$attribute}) {
                return false;
            }

            return $options['allow-default'] || $this->{$attribute} !== $options['default'];
        })->map(function (array $options, string $attribute) {
            return $options['attr']
                ? "{$options['attr']}=\"{$this->{$attribute}}\""
                : $this->{$attribute};
        })->implode(' ');

        return "<x-button {$attributes} />";
    }

    public function getIconsProperty(): Collection
    {
        $path = base_path('vendor/wireui/wireui/resources/views/components/icons/outline');

        return collect(File::files($path))
            ->map(function (SplFileInfo $file) {
                return Str::before($file->getFilename(), '.blade.php');
            })->sortBy('name');
    }

    public function render()
    {
        return view('livewire.docs.buttons.playground');
    }
}
