@extends('layouts.app')

@section('content')

    
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/900x340/?recipe" class="d-block w-100" alt="...">
            
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/900x340/?kitchen" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/900x340/?pan" class="d-block w-100" alt="...">
          </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container py-5">
        <h4>Featured Recipe</h4>
        <div class="row mb-5 row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col">
                <div class="card mb-3">
                <img src="https://source.unsplash.com/300x240/?food" class="card-img-top" alt="food">
                <div class="card-body">
                    <h5><a href="recipe.html">Recipe 1</a></h5>
                    <small>Category</small>
                </div>
                </div>
            </div>
                        <div class="col">
                <div class="card mb-3">
                <img src="https://source.unsplash.com/300x240/?nature" class="card-img-top" alt="food">
                <div class="card-body">
                    <h5><a href="recipe.html">Recipe 2</a></h5>
                    <small>Category</small>
                </div>
                </div>
            </div>
                        <div class="col">
                <div class="card mb-3">
                <img src="https://source.unsplash.com/300x240/?kitchen" class="card-img-top" alt="food">
                <div class="card-body">
                    <h5><a href="recipe.html">Recipe 3</a></h5>
                    <small>Category</small>
                </div>
                </div>
            </div>
                        <div class="col">
                <div class="card mb-3">
                <img src="https://source.unsplash.com/300x240/?city" class="card-img-top" alt="food">
                <div class="card-body">
                    <h5><a href="recipe.html">Recipe 4</a></h5>
                    <small>Category</small>
                </div>
                </div>
            </div>
                      
        </div>

        <h4>Latest Recipe</h4>
        <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-4">
          @foreach($latest as $recipe)
            <div class="col mb-3">
              <img src="{{ asset('storage/'.$recipe->image) }}" alt="" class="w-100 rounded">
              <h5><a href="{{ route('recipe.show',['recipe'=>$recipe->id]) }}">{{ $recipe->name }}</a></h5>
              <small>{{ $recipe->category->name }}</small>
            </div>
          @endforeach
        </div>
      </div>
@endsection