@props([
    'label' => null,
    'errors' => null,
    'hint' => null,
    'cornerHint' => null,
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
    {{ $slot }}
</div>
