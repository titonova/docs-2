<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use WireUi\Traits\Actions;

class Form extends Component
{
    use Actions;

    public array $user = [
        'country'   => null,
        'birthdate' => null,
        'phone'     => null,
    ];

    protected array $rules = [
        'user.first_name'  => 'required',
        'user.last_name'   => 'required',
        'user.email'       => 'required',
        'user.phone'       => 'required',
        'user.country'     => 'required',
        'user.birthdate'   => 'required',
        'user.street'      => 'required',
        'user.city'        => 'required',
        'user.state'       => 'required',
        'user.postal_code' => 'required',
        'user.terms'       => 'required|accepted',
    ];

    protected array $validationAttributes = [
        'user.first_name'  => 'First Name',
        'user.last_name'   => 'Last Name',
        'user.email'       => 'Email',
        'user.phone'       => 'Phone',
        'user.country'     => 'Country',
        'user.birthdate'   => 'Birthdate',
        'user.street'      => 'Street',
        'user.city'        => 'City',
        'user.state'       => 'State',
        'user.postal_code' => 'Postal Code',
        'user.terms'       => 'Terms',
    ];

    public $code = <<<HTML
    <x-card title="Personal Information">
        <x-errors class="mb-4" />

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <x-input label="First Name" placeholder="First Name" wire:model.defer="user.first_name" />
            <x-input label="Last Name"  placeholder="Last Name" wire:model.defer="user.last_name" />

            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-7 sm:gap-5">
                <div class="col-span-1 sm:col-span-4">
                    <x-input label="Email" placeholder="example@mail.com" wire:model.defer="user.email" />
                </div>

                <div class="col-span-1 sm:col-span-3">
                    <x-inputs.phone label="Phone" placeholder="Phone" wire:model.defer="user.phone" />
                </div>
            </div>

            <x-select
                label="Country"
                placeholder="Country"
                wire:model.defer="user.country"
                :options="\$this->countries()"
            />

            <x-datetime-picker label="Birthdate" placeholder="Birthdate" wire:model.defer="user.birthdate" />

            <div class="col-span-1 sm:col-span-2">
                <x-input label="Street Address" placeholder="Street Address" wire:model.defer="user.street" />
            </div>

            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6">
                <x-input label="City" placeholder="City" wire:model.defer="user.city" />
                <x-input label="State" placeholder="State" wire:model.defer="user.state" />
                <x-input label="Postal Code" placeholder="Postal Code" wire:model.defer="user.postal_code" />
            </div>

            <x-toggle label="Accept the terms and conditions" wire:model.defer="user.terms" />
        </div>

        <x-slot name="footer">
            <div class="flex items-center gap-x-3 justify-end">
                <x-button wire:click="cancel" label="Cancel" flat />
                <x-button wire:click="save" label="Save" spinner="save" primary />
            </div>
        </x-slot>
    </x-card>
    HTML;

    public function save(): void
    {
        $this->validate();

        $this->notification()->success('Profile Updated', 'Your fake data will be lost when refresh this page');
    }

    public function cancel(): void
    {
        $this->reset('user');
        $this->resetValidation();
    }

    public function countries(): array
    {
        return [
            'American Samoa',
            'AndorrA',
            'Angola',
            'Anguilla',
            'Antarctica',
            'Antigua and Barbuda',
            'Argentina',
            'Armenia',
            'Australia',
            'Austria',
            'Barbados',
            'Belarus',
            'Belgium',
            'Belize',
            'Bolivia',
            'Botswana',
            'Bouvet Island',
            'Brazil',
            'British Indian Ocean Territory',
            'Brunei Darussalam',
            'Bulgaria',
            'Burkina Faso',
            'Cayman Islands',
            'Central African Republic',
            'China',
            'Christmas Island',
            'Cocos (Keeling) Islands',
            'Colombia',
            'Costa Rica',
            'Croatia',
            'Cuba',
            'Cyprus',
            'Czech Republic',
            'Denmark',
            'Djibouti',
            'Egypt',
            'El Salvador',
            'Equatorial Guinea',
            'Eritrea',
            'Faroe Islands',
            'Fiji',
            'Finland',
            'French Guiana',
        ];
    }

    public function render()
    {
        return view('livewire.home.form');
    }
}
