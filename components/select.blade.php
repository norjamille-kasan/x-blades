@props([
    'color' => 'default',
    'icon' => null,
    'label' => null,
    'required' => false,
])

<div>
    @if ($label)
        <label class="block font-medium text-gray-700 mb-1" for="{{ $attributes->get('id') }}">
            {{ $label }}
            @if ($required)
                <span class="text-red-600">*</span>
            @endif
        </label>
    @endif
    <div class="relative">
        @if ($icon)
            <span class="absolute top-3 bg-transparent left-2 text-gray-500">{{ $icon }}</span>
        @endif
        <select {{ $attributes }} @class([
            'rounded-md shadow-sm w-full focus:ring-0 focus:bg-gray-50',
            'border-neutral-300 border-gray-300 focus:border-gray-300' => !$errors->has(
                $attributes->wire('model')->value),
            'text-red-800 border-red-600 focus:border-red-600' => $errors->has(
                $attributes->wire('model')->value),
            'pl-8' => $icon != null,
        ])>
            {{ $slot }}
        </select>
    </div>
    @if ($errors->has($attributes->wire('model')->value))
        <p class="mt-1 text-sm text-red-600">{{ $errors->first($attributes->wire('model')->value) }}</p>
    @endif
</div>
