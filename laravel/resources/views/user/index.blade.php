@extends('layouts.admin')

@section('admin-content')
    <h1>Users</h1>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection