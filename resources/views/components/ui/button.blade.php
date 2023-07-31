@props([
    'type' => 'button',
    'loading' => null,
    'label' => '',
    'rightIcon' => null,
    'leftIcon' => null,
    'color' => 'default',
    'loadingLabel' => null,
    'href' => null,
])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }} @if ($href) href="{{ $href }}" @endif type="{{ $type }}"
    {{ $attributes->wire('click') }} {{ $attributes->whereStartsWith('x') }} wire:loading.attr="disabled"
    @if ($loading) wire:target="{{ $loading }}" @endif
    wire:loading.class="cursor-progress bg-gray-50" @class([
        'px-3 py-2 text-sm rounded-md shadow items-center justify-center  inline-flex font-medium',
        'border bg-white border-gray-300 hover:bg-gray-50 text-gray-900 ' =>
            $color === 'default',
        'bg-green-600 text-white hover:bg-green-700  ' => $color === 'green',
        'bg-blue-600 text-white hover:bg-blue-700  ' => $color === 'blue',
        'bg-red-600 text-white hover:bg-red-700  ' => $color === 'red',
        'bg-indigo-600 text-white hover:bg-indigo-700  ' => $color === 'indigo',
        'bg-emerald-600 text-white hover:bg-emerald-700  ' => $color === 'emerald',
        'bg-pink-600 text-white hover:bg-pink-700  ' => $color === 'pink',
        'bg-gray-600 text-white hover:bg-gray-700  ' => $color === 'gray',
        'bg-yellow-600 text-white hover:bg-yellow-700  ' => $color === 'yellow',
        'bg-black text-white hover:bg-black/90 ' => $color === 'black',
        //   add/remove colors as you want ------
    ])>
    @if ($loading)
        <svg wire:loading wire:target="{{ $loading }}" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" @class([
                'w-4 h-4 mr-2 animate-spin transition duration-500 ease-in-out',
                'text-gray-600' => $color === 'default',
                'text-white' => $color !== 'default',
            ])>
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
        {{-- change loading icon as you want --}}
    @endif
    @if ($leftIcon)
        <span @if ($loading) wire:loading.remove @endif
            @if ($leftIcon) class="mr-2" @endif>
            {{ $leftIcon }}
        </span>
    @endif
    {{ $slot }}
    @if ($loadingLabel && $loading)
        <span wire:loading.remove wire:target="{{ $loading }}">
            {{ $label }}
        </span>
        <span wire:loading wire:target="{{ $loading }}">
            {{ $loadingLabel }}
        </span>
    @else
        <span>
            {{ $label }}
        </span>
    @endif
    @if ($rightIcon)
        <span @if ($rightIcon) class="ml-2" @endif>
            {{ $rightIcon }}
        </span>
    @endif
    </{{ $tag }}>
