@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 border-end py-4">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link @if(route('home')==url()->current()) active @endif" aria-current="page" href="{{ route('home') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(route('recipe.index')==url()->current()) active @endif" href="{{ route('recipe.index') }}">My Receipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Profile</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 py-4" style="min-height:600px">
            @yield('account-content')
        </div>
    </div>
</div>
@endsection