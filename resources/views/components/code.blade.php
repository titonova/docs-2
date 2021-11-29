@props(['language', 'code' => null, 'contents' => null])

<pre>
<x-torchlight-code
    {{ $attributes}}
    :contents="$contents"
    :language='$language'>
@unless ($contents)
{!! $code ?? $slot !!}
@endunless
</x-torchlight-code>
</pre>
