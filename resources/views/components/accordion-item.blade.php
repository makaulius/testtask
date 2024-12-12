@props([
    'heading',
    'content',
])

@php
    $uniqueId = uniqid('accordion-item-', true); // Always generate a unique ID
@endphp

<div x-data="{ open: false }" class="bg-white shadow-sm rounded-lg">
    <h3 
        id="heading-{{ $uniqueId }}" 
        @click="open = !open" 
        class="accordion-toggle cursor-pointer font-semibold text-lg p-2 pl-4 pr-10 w-full" 
        role="button" 
        tabindex="0" 
        :aria-expanded="open.toString()" 
        aria-controls="content-{{ $uniqueId }}"
    >
        {{ $heading }}
    </h3>

    <div 
        :class="{ 'hidden': !open, 'block': open }" 
        id="content-{{ $uniqueId }}" 
        :aria-expanded="open.toString()" 
    >
        <div class="accordion-body p-4 pt-0">
            {{ $content }}
        </div>
    </div>
</div>