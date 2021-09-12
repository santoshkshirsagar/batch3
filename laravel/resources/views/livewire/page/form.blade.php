<div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" wire:model="page.name" class="form-control" value="{{ old('name') }}" maxlength="40">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug">Slug/URL</label>
            <input type="text" wire:model="page.slug" class="form-control"  maxlength="40">
            @error('slug')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
</div>
