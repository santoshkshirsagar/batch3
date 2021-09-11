@extends('layouts.admin')

@section('admin-content')
    <div class="container">
        <h1>Dashboard</h1>

        @livewire('recipe.featured')
    </div>
@endsection