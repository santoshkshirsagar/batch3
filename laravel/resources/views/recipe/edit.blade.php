@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <h1>Edit Recipe</h1>
            <form action="{{ route('recipe.update',['recipe'=>$recipe->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $recipe->name }}" maxlength="40">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ $recipe->description }}">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Image</label><br/>
                    <img style="height:100px;" class="py-1 rounded" src="{{ asset('storage/'.$recipe->image) }}" alt="{{ $recipe->name }}">
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($recipe->category_id==$category->id) selected='selected' @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="ingredients">Ingredients</label>
                    <textarea type="text" name="ingredients" id="ingredients" class="form-control editor" value="{{ $recipe->ingredients }}"></textarea>
                    @error('ingredients')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="preparation">Preparation</label>
                    <textarea type="text" name="preparation" id="preparation" class="form-control editor" value="{{ $recipe->preparation }}"></textarea>
                    @error('preparation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                

                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    var editors = document.getElementsByClassName("editor");
    for (var i = 0; i < editors.length; i++) {
        ClassicEditor
        .create( editors.item(i) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
    }
</script>
@endsection
