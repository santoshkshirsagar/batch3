<div>
    <form wire:submit.prevent="submit">
        <div class="mb-3">
            <label for="current">Current Password</label>
            <input type="password" wire:model="current" id="current" class="form-control">
            @if($error)
                <span class="text-danger">{{ $error }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="password">New Password</label>
            <input type="password" wire:model="password" id="password" class="form-control">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" wire:model="password_confirmation" id="password_confirmation" class="form-control">
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
