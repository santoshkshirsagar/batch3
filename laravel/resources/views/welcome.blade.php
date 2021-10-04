@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row my-3">
    <div class="col">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <!-- <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
          @foreach($banners as $key=>$banner)
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="{{ $key }}"  @if($loop->first) class="active" aria-current="true" @endif
            aria-label="Slide {{ $key+1 }}"></button>
          @endforeach
        </div>

        <div class="carousel-inner">
          @foreach($banners as $banner)
            <div class="carousel-item @if($loop->first) active @endif">
              <a href="{{ $banner->link }}">
                <img src="{{ asset('storage/'.$banner->image) }}" class="d-block w-100" alt="...">
              </a>
            </div>
          @endforeach
          <!-- <div class="carousel-item active">
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
          </div> -->
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
    </div>
    <div class="col-md-6">

    </div>
  </div>
</div>
    

      <div class="container py-5">
        <h4>Featured Recipe</h4>
        <div class="row mb-5 row-cols-1 row-cols-sm-2 row-cols-md-4">
          @foreach($featured as $row)
            @livewire('recipe.card', ['recipe'=>$row->recipe])
          @endforeach
        </div>

        <h4>Latest Recipe</h4>
        <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-4">
          @foreach($latest as $recipe)
            @livewire('recipe.card', ['recipe'=>$recipe])
          @endforeach
        </div>
      </div>
@endsection