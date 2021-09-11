<div>
    <form action="">
        <input type="text" wire:model="keyword" class="form-control">
        @error('keyword')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        You serched for {{ $keyword }}
    </form>
</div>
