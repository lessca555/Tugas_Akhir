@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-blue-500 text-white flex items-center w-full p-4 rounded-lg leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 hover:text-blue-900 outline-none'
            : 'text-black flex items-center w-full p-4 rounded-lg leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 hover:text-blue-900 outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
