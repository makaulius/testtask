@props([
    'size' => 'normal',
    'type' => 'normal',
    'href' => null,
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold text-center text-white transition duration-200 text-nowrap';

    $sizeStyles = [
        'normal' => 'h-12 px-4 md:px-6 text-sm',
        'big' => 'h-14 px-8 text-lg',
    ];
    $typeStyles = [
        'normal' => 'bg-accent rounded-md',
        'rounded' => 'bg-accent rounded-full h-[32px] md:h-12',
    ];

    $class = $baseClasses . ' ' . ($sizeStyles[$size] ?? $sizeStyles['normal']) . ' ' . ($typeStyles[$type] ?? $typeStyles['normal']) . ' hover:bg-accentHover';
@endphp

@if($href)
    <a href="{{ $href }}" class="{{ $class }}">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </button>
@endif