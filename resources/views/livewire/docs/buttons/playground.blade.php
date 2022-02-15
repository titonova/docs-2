<div class="space-y-3">
    <x-section.title href="#playground" title="🪁 Playground" />

    <x-card>
        <div class="flex justify-center mb-4">
            <x-button
                :outline="$style === 'outline'"
                :flat="$style === 'flat'"
                :color="$color"
                :size="$size"
                :icon="$icon"
                :right-icon="$rightIcon"
                :label="$label"
            />
        </div>

        <x-code language="html" :contents="$this->buttonCode" />

        <div class="mt-5 grid grid-cols-1 sm:grid-cols-3 gap-3">
            <x-input label="Label" wire:model.debounce.500ms="label" />

            <x-select wire:model="style" label="Style" :clearable="false">
                <x-select.option value="default" label="default" />
                <x-select.option value="outline" label="outline" />
                <x-select.option value="flat"    label="flat" />
            </x-select>

            <x-select wire:model="color" label="Color" :clearable="false">
                <x-select.option value="default" label="default" />
                <x-select.option class="text-primary-500" value="primary" label="primary" />
                <x-select.option class="text-secondary-500" value="secondary" label="secondary" />
                <x-select.option class="text-positive-500" value="positive" label="positive" />
                <x-select.option class="text-negative-500" value="negative" label="negative" />
                <x-select.option class="text-warning-500" value="warning" label="warning" />
                <x-select.option class="text-info-500" value="info" label="info" />
                <x-select.option class="text-gray-700" value="dark" label="dark" />
                <x-select.option value="white" label="white" />
                <x-select.option class="text-black-500" value="black" label="black" />
                <x-select.option class="text-slate-500" value="slate" label="slate" />
                <x-select.option class="text-gray-500" value="gray" label="gray" />
                <x-select.option class="text-zinc-500" value="zinc" label="zinc" />
                <x-select.option class="text-neutral-500" value="neutral" label="neutral" />
                <x-select.option class="text-stone-500" value="stone" label="stone" />
                <x-select.option class="text-red-500" value="red" label="red" />
                <x-select.option class="text-orange-500" value="orange" label="orange" />
                <x-select.option class="text-amber-500" value="amber" label="amber" />
                <x-select.option class="text-lime-500" value="lime" label="lime" />
                <x-select.option class="text-green-500" value="green" label="green" />
                <x-select.option class="text-emerald-500" value="emerald" label="emerald" />
                <x-select.option class="text-teal-500" value="teal" label="teal" />
                <x-select.option class="text-cyan-500" value="cyan" label="cyan" />
                <x-select.option class="text-sky-500" value="sky" label="sky" />
                <x-select.option class="text-blue-500" value="blue" label="blue" />
                <x-select.option class="text-indigo-500" value="indigo" label="indigo" />
                <x-select.option class="text-violet-500" value="violet" label="violet" />
                <x-select.option class="text-purple-500" value="purple" label="purple" />
                <x-select.option class="text-fuchsia-500" value="fuchsia" label="fuchsia" />
                <x-select.option class="text-pink-500" value="pink" label="pink" />
                <x-select.option class="text-rose-500" value="rose" label="rose" />
            </x-select>

            <x-select wire:model="size" label="Size" :clearable="false">
                <x-select.option value="2xs" label="2xs" />
                <x-select.option value="xs" label="xs" />
                <x-select.option value="sm" label="sm" />
                <x-select.option value="default" label="default" />
                <x-select.option value="md" label="md" />
                <x-select.option value="lg" label="lg" />
                <x-select.option value="xl" label="xl" />
            </x-select>

            <x-select wire:model="icon" label="Icon" placeholder="Select an icon" :options="$this->icons" />
            <x-select wire:model="rightIcon" label="Right Icon" placeholder="Select an icon" :options="$this->icons" />
        </div>
    </x-card>
</div>
