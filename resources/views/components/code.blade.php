@props(['language', 'code' => null, 'contents' => null, 'copy' => true, 'lineNumbers' => true])

<pre @unless($copy === true) data-nocopy="true" @endunless>
<x-torchlight-code
    {{ $attributes}}
    :contents="$contents"
    :language='$language'>
@unless($lineNumbers === true)
// torchlight! {"lineNumbers": false}
@endunless
@unless ($contents)
{!! $code ?? $slot !!}
@endunless
</x-torchlight-code>
</pre>
