@extends('layouts.admin')

@section('admin-content')
<div class="container py-4">
    <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Add Category</a>
    <h1>Categories ({{ $categories->total() }})</h1>
    <table class="table table-borderd">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('category.edit', ['category'=>$category->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                <a href="#"  class="btn btn-sm btn-danger" onclick="document.getElementById('delete-{{ $category->id }}').submit()"> <i class="fas fa-trash-alt"></i> Delete</a>
                <form id="delete-{{ $category->id }}" action="{{ route('category.destroy', ['category'=>$category->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $categories->links() }}
</div>
@endsection