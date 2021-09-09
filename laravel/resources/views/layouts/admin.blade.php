@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 border-end py-4">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link @if(route('dashboard')==url()->current()) active @endif" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(route('recipe.index')==url()->current()) active @endif" href="{{ route('recipe.index') }}">Receipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(route('category.index')==url()->current()) active @endif" href="{{ route('category.index') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(route('page.index')==url()->current()) active @endif" href="{{ route('page.index') }}">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(route('user.index')==url()->current()) active @endif" href="{{ route('user.index') }}">Users</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 py-4" style="min-height:600px">
            @yield('admin-content')
        </div>
    </div>
</div>
@endsection
