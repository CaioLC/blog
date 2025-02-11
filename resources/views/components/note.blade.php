@props([
    'type' => 'info' // ['info', 'warn']
])

@php
    $card_color = NULL;
    $mg_color = NULL;
    $header_text = NULL;
    $header_color = NULL;
    $text_color = NULL;
    $svg = NULL;

    match ($type) {
        'info' => [
            $card_color = 'bg-stone-50',
            $mg_color = 'border-blue-700',
            $header_text = 'Cool Tip',
            $header_color = 'text-blue-800',
            $text_color = 'text-blue-700',
            $svg = 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        'warn' => [
            $card_color = 'bg-stone-50',
            $mg_color = 'border-orange-700',
            $header_text = 'Caution',
            $header_color = 'text-orange-700',
            $text_color = 'text-orange-600',
            $svg = 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z'
        ],
        default => dd("Failed to match note type '$type'")
    };
@endphp
    
<div class="border-l-4 p-4 my-4 rounded-tr-3xl {{ $card_color }} {{ $mg_color }}">
<div class="flex items-center">
    <svg class="w-6 h-6 {{ $header_color }} mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $svg }}"></path>
    </svg>
    <h3 class="text-lg font-semibold {{ $header_color }}">{{ $header_text }}</h3>
</div>
<p class="mt-2 {{ $text_color }}">{{ $slot }}</p>
</div>
