@props(['variant' => 'primary', 'href' => '#'])

@php
$base = 'inline-block px-6 py-3 rounded-full font-semibold text-sm transition duration-200 shadow-sm';
$styles = [
    'primary'   => 'bg-raka-red text-white hover:bg-red-800 hover:shadow-md',
    'secondary' => 'bg-transparent border border-raka-dark/20 text-raka-dark hover:bg-raka-dark/5',
    'ghost'     => 'text-raka-dark hover:text-raka-red',
];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . $styles[$variant]]) }}>
    {{ $slot }}
</a>