@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-yellow-500 font-bold transition duration-150 ease-in-out'
            : 'text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>