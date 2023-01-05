<div class="flex gap-5 flex-wrap justify-center">
    @foreach ($sponsors as $sponsor)
        <a href="{{ $sponsor['url'] }}?ref=wireui" target="_blank">
            <img src="{{ url($sponsor['image']) }}" alt="{{ $sponsor['label'] }}" class="drop-shadow-md h-12 xl:h-16 w-auto">
        </a>
    @endforeach
</div>
