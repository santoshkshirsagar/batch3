@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $recipe->name }}</h1>
                <img class="w-50" src="{{ asset('storage/'.$recipe->image) }}" alt="Image of {{ $recipe->name }}">
                <p>{{ $recipe->description }}</p>
            </div>
            <div class="col border-start">
                <h3>Related</h3>
            </div>
        </div>
    </div>
@endsection