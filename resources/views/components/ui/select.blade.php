@props([
    'error' => null,
    'color' => 'default',
    'icon' => null,
    'error' => false,
    'options' => [],
    'placeholder' => null,
])

<div class="relative">
    @if ($icon)
        <span class="absolute top-3 bg-transparent left-2 text-gray-500">{{ $icon }}</span>
    @endif
    <select {{ $attributes }} @class([
        'rounded-lg focus:ring-0 focus:bg-gray-50 disabled:cursor-not-allowed disabled:opacity-75',
        ' focus:border-gray-300 border-gray-300' => $error == false,
        ' text-red-800 focus:border-red-600 border-red-600' => $error == true,
        'pl-8' => $icon != null,
    ])>
        @if ($placeholder)
            <option value="" hidden>{{ $placeholder }}</option>
        @else
            <option value="" hidden>Select</option>
        @endif
        @foreach ($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
        @endforeach
        {{ $slot }}
    </select>

</div>
