@extends('layouts.account')

@section('account-content')
<div class="container py-4">
    <a href="{{ route('recipe.create') }}" class="btn btn-primary float-end">Add Recipe</a>
    <h1>My Recipes ({{ $recipes->total() }})</h1>
    <table class="table table-borderd">
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    @foreach($recipes as $recipe)
        <tr>
            <td>{{ $recipe->name }}</td>
            <td><img style="height:100px;" src="{{ asset('storage/'.$recipe->image) }}" alt="{{ $recipe->name }}"></td>
            <td>
                <a href="{{ route('recipe.edit', ['recipe'=>$recipe->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                <a href="#"  class="btn btn-sm btn-danger" onclick="document.getElementById('delete-{{ $recipe->id }}').submit()"> <i class="fas fa-trash-alt"></i> Delete</a>
                <form id="delete-{{ $recipe->id }}" action="{{ route('recipe.destroy', ['recipe'=>$recipe->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $recipes->links() }}
</div>
@endsection