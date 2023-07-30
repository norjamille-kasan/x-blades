@php
    $options = [
        [
            'value' => '1',
            'label' => 'One Option',
        ],
        [
            'value' => '2',
            'label' => 'Two Option',
        ],
        [
            'value' => '3',
            'label' => 'Three Option',
        ],
    ];
@endphp

<div class="grid max-w-4xl w-full border space-y-2 p-4">
    <div class="mb-5 flex space-x-2 items-center">
        <x-ui.input required label="Enter your name" wire:model.defer="test" type="text" hint="This is a corner hint"
            placeholder="Enter you name" />
    </div>
    <div class="flex">
        <x-ui.button wire:click="handleTest" loading-label="Submitting..." loading="handleTest" label="Submit"
            color="green" />
    </div>
</div>
