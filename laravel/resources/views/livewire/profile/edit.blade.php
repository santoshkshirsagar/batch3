<div>
    @if($editForm)
    
    <a wire:click="cancel" class="float-end btn btn-danger btn-sm mb-3">Cancel</a>
    <a wire:click="save" class="float-end btn btn-success btn-sm mb-3 me-3">Save</a>
    <div class="clearfix"></div>
        <form action="">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" wire:model="name" class="form-control">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" wire:model="email" class="form-control">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </form>
    @else
    
    <a wire:click="edit" class="float-end btn btn-primary btn-sm"> <i class="fas fa-edit"></i> Edit</a>
    <div class="clearfix"></div>
    <table class="table table-bordered my-3">
        <tr>
            <td>Name</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $email }}</td>
        </tr>
    </table>
    @endif
</div>
