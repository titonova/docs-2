@props(['href', 'label'])

<li>
    <a href="{{ $href }}">
        <span class="text-teal-600 mr-1">#</span>
        {{ $label }}
    </a>
</li>
