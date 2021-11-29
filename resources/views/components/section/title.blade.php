@props(['id', 'href', 'title'])

<a {{ $attributes->merge(['class' => 'text-2xl leading-8 font-extrabold tracking-tight
        text-gray-700 dark:text-secondary-400 sm:text-4xl']) }}
    @isset($id) id="{{ $id }}" @endisset
    @isset($href) href="{{ $href }}" @endisset>
    {{ $title }}
</a>
