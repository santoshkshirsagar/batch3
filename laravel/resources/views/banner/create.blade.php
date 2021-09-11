@extends('layouts.admin')

@section('admin-content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <h1>Create Banner</h1>
            <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" maxlength="40">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link">Link/URL</label>
                    <input type="text" name="link" id="link" class="form-control" value="{{ old('link') }}" maxlength="80">
                    @error('link')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sequence">Sequence</label>
                    <input type="text" name="sequence" id="sequence" class="form-control" value="{{ old('sequence') }}" maxlength="40">
                    @error('sequence')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
