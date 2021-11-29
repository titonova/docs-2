<?php

namespace App\View\Components\Changelog;

use Illuminate\View\Component;

class Card extends Component
{
    public ?string $description = null;

    public ?string $release = null;

    public ?string $date = null;

    public ?string $type = null;

    public string $badgeColor;

    public function __construct(
        ?string $description = null,
        ?string $release = null,
        ?string $date = null,
        ?string $type = null
    ) {
        $this->description = $description;
        $this->release     = $release;
        $this->date        = $date;
        $this->type        = $type;
        $this->badgeColor  = $this->getBadgeColor($type);
    }

    public function render()
    {
        return view('components.changelog.card');
    }

    public function getBadgeColor(string $type): string
    {
        $colors = [
            'release'     => 'bg-green-500',
            'feature'     => 'bg-green-500',
            'hotfix'      => 'bg-red-500',
            'enhancement' => 'bg-primary-500',
        ];

        return data_get($colors, $type, 'bg-gray-500');
    }
}
