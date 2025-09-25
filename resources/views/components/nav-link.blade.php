@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-mediumtext-gray-900 focus:outline-none '
            : 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium text-gray-500 ';
@endphp

<a {{ $attributes->merge(['class' => $classes .'py-3 hover:bg-blue-500']) }}>
    {{ $slot }}
</a>
