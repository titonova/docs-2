<div class="flex flex-wrap justify-center">
    @foreach ($this->sponsors as $sponsor)
        <a href="{{ $sponsor['url'] }}" target="_blank">
            <img src="{{ url($sponsor['image']) }}" alt="{{ $sponsor['label'] }}" class="drop-shadow-md h-16 w-auto">
        </a>
    @endforeach
</div>
