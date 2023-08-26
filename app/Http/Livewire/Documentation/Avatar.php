<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Avatar extends Component
{
    public string $imagesCode = <<<BLADE
    <x-avatar xs src="https://picsum.photos/300?size=xs" />
    <x-avatar sm src="https://picsum.photos/300?size=sm" />
    <x-avatar md src="https://picsum.photos/300?size=md" />
    <x-avatar lg src="https://picsum.photos/300?size=lg" />
    <x-avatar xl src="https://picsum.photos/300?size=xl" />
    BLADE;

    public string $labelsCode = <<<BLADE
    <x-avatar xs label="AB" />
    <x-avatar sm label="AB" />
    <x-avatar md label="AB" />
    <x-avatar lg label="AB" />
    <x-avatar xl label="AB" />
    BLADE;

    public string $squaredCode = <<<BLADE
    <x-avatar xs squared src="https://picsum.photos/300?size=xs" />
    <x-avatar sm squared src="https://picsum.photos/300?size=sm" />
    <x-avatar md squared src="https://picsum.photos/300?size=md" />
    <x-avatar lg squared src="https://picsum.photos/300?size=lg" />
    <x-avatar xl squared src="https://picsum.photos/300?size=xl" />
    BLADE;

    public string $sizesCode = <<<BLADE
    <x-avatar xs label="AB" />
    <x-avatar sm label="AB" />
    <x-avatar md label="AB" />
    <x-avatar lg label="AB" />
    <x-avatar xl label="AB" />
    <x-avatar size="w-18 h-18 text-2xl" label="AB" />
    <x-avatar size="w-24 h-24" src="https://picsum.photos/300?size=24x" />
    BLADE;

    public string $groupsCode = <<<BLADE
    <div class="flex -space-x-2 items-center">
        <x-avatar sm src="https://picsum.photos/300?size?id=1" />
        <x-avatar sm src="https://picsum.photos/300?size?id=2" />
        <x-avatar sm src="https://picsum.photos/300?size?id=3" />
        <x-avatar sm src="https://picsum.photos/300?size?id=4" />
    </div>
    BLADE;

    public string $placeholderCode = <<<BLADE
    <x-avatar xs />
    <x-avatar sm />
    <x-avatar md />
    <x-avatar lg />
    <x-avatar xl />
    BLADE;

    public function render()
    {
        return view('livewire.documentation.avatar')->layout(Documentation::class);
    }
}
