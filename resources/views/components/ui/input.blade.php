@props([
    'placeholder' => null,
    'error' => null,
    'color' => 'default',
    'icon' => null,
    'error' => false,
])

<div class="relative">
    @if ($icon)
        <span class="absolute top-3 bg-transparent left-2 text-gray-500">{{ $icon }}</span>
    @endif
    <input {{ $attributes->wire('model') }} @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        type="text" @class([
            'rounded-lg focus:ring-0 focus:bg-gray-50',
            ' focus:border-gray-300 border-gray-300' => $error == false,
            ' text-red-800 focus:border-red-600 border-red-600' => $error == true,
            'pl-8' => $icon != null,
        ]) />
</div>
