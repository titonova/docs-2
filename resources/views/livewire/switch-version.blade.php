<div>
    <select class="py-0 border-0 bg-transparent dark:text-white" wire:model="currentVersion">
        @foreach ($this::VERSIONS as $version => $url)
            <option wire:key="$version" value="{{ $url }}">
                Version {{ $version }}
            </option>
        @endforeach
    </select>
</div>
