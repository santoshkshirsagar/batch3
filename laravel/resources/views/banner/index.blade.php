@extends('layouts.admin')

@section('admin-content')
<div class="container py-4">
    <a href="{{ route('banner.create') }}" class="btn btn-primary float-end">Add Banner</a>
    <h1>Banners ({{ $banners->total() }})</h1>
    <table class="table table-borderd">
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Link</th>
            <th>Sequence</th>
            <th>Action</th>
        </tr>
    @foreach($banners as $banner)
        <tr>
            <td>{{ $banner->name }}</td>
            <td><img src="{{ asset('storage/'.$banner->image) }}" style="width:100px;"></td>
            <td>{{ $banner->link }}</td>
            <td>{{ $banner->sequence }}</td>
            <td>
                <a href="{{ route('banner.edit', ['banner'=>$banner->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> Edit</a>
                <a href="#"  class="btn btn-sm btn-danger" onclick="document.getElementById('delete-{{ $banner->id }}').submit()"> <i class="fas fa-trash-alt"></i> Delete</a>
                <form id="delete-{{ $banner->id }}" action="{{ route('banner.destroy', ['banner'=>$banner->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $banners->links() }}
</div>
@endsection