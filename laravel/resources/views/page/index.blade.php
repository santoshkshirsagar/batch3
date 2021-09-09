@extends('layouts.admin')

@section('admin-content')
<div class="container py-4">
    <a href="{{ route('page.create') }}" class="btn btn-primary float-end">Add Page</a>
    <h1>Pages ({{ $pages->total() }})</h1>
    <table class="table table-borderd">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
    @foreach($pages as $page)
        <tr>
            <td>{{ $page->name }}</td>
            <td>
                <a href="{{ route('page.edit', ['page'=>$page->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                <a href="#"  class="btn btn-sm btn-danger" onclick="document.getElementById('delete-{{ $page->id }}').submit()"> <i class="fas fa-trash-alt"></i> Delete</a>
                <form id="delete-{{ $page->id }}" action="{{ route('page.destroy', ['page'=>$page->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $pages->links() }}
</div>
@endsection