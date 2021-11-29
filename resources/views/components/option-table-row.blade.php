@props(['prop', 'required', 'default', 'type', 'available'])

<tr>
    <td class="p-2.5 font-mono text-xs text-blue-600 whitespace-nowrap">
        {{ $prop ?? null }}
    </td>
    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
        {{ $required ?? null }}
    </td>
    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
        {{ $default ?? null }}
    </td>
    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
        {{ $type ?? null }}
    </td>

    @if ($available ?? null)
        <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
            {{ $available ?? null }}
        </td>
    @endif
</tr>
