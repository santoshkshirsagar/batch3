@extends('layouts.admin')

@section('admin-content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <h1>Edit Category</h1>
            <form action="{{ route('category.update',['category'=>$category->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" maxlength="40">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
