<div class="relative flex items-center min-h-[40vh] py-8 sm:py-24 lg:py-32">
    <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <h3 class="text-2xl font-semibold tracking-wider text-teal-600">
            Sponsors
        </h3>

        <div class="mt-12 flex justify-center">
           @foreach ($this->sponsors as $sponsor)
                <a href="{{ $sponsor['url'] }}" target="_blank">
                    <img src="{{ url($sponsor['image']) }}" alt="{{ $sponsor['label'] }}" class="drop-shadow-md h-16 w-auto">
                </a>
            @endforeach
        </div>
    </div>
</div>
