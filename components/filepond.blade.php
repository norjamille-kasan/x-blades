<div wire:ignore x-data x-init="@if ($attributes['preview']) FilePond.registerPlugin(FilePondPluginImagePreview); @endif
FilePond.setOptions({
    allowMulitple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
    server: {
        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
            @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
        },
        revert: (filename, load) => {
            @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
        },
    }
});
FilePond.create($refs.fileInput);
document.querySelector('.filepond--credits').style.display = 'none';">
    <input type="file" x-ref="fileInput" {{ $attributes }}>
</div>
