@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <h1>Create Recipe</h1>
            <form action="{{ route('recipe.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" maxlength="40">
                    @error('name')
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
                <div class="mb-3">
                    <label for="category">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
