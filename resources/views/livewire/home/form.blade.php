<div class="py-16 bg-gray-50 lg:py-24">
    <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="relative">
            <h2 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-teal-600 sm:text-4xl">
                Powerful Form Components
            </h2>
            <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">
                Form components are essential in any project. WireUI has a variety of ready-to-use form components,
                enjoy the date picker, time picker, select, inputs and more
            </p>
        </div>

        <div class="relative mt-12 sm:mt-16 lg:mt-24 w-full sm:max-w-4xl mx-auto">
            <x-code-preview
                title="Form Example"
                href="#form-example"
                id="form-example"
                language="html"
                :code="$code"
                clean>
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
                            :options="$this->countries()"
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
            </x-code-preview>
        </div>
    </div>
</div>
