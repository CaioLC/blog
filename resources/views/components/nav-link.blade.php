@props(['active', 'href'])

<a 
    class="
        {{ $active ? 'underline underline-offset-4 text-amber-500' : 'no-underline' }}
        text-amber-700 hover:text-amber-500
        block px-3 py-2 text-base font-medium
    "
    aria-current="{{ $active ? 'page' : 'false'}}"
    href="{{ $href }}"
>{{ $slot }}
</a>