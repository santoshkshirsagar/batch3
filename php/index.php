<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet"> 

    <style>
      body{font-family: 'Urbanist', sans-serif;}
    </style>
  </head>
  <body>
      <div class="container">
          <div class="row ">
                <div class="col-md-6 py-3">
                    Logo
                </div> 
                <div class="col text-end  py-3">
                    Login | Signup
                </div> 
          </div>
      </div>

      <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      
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
        <?php
        $arr = ['food', 'nature', 'kitchen', 'city'];
        foreach($arr as $key=>$val){
            ?>
            <div class="col">
                <div class="card mb-3">
                <img src="https://source.unsplash.com/300x240/?<?php echo $val; ?>" class="card-img-top" alt="food">
                <div class="card-body">
                    <h5><a href="recipe.html">Recipe <?php echo $key+1; ?></a></h5>
                    <small>Category</small>
                </div>
                </div>
            </div>
            <?php
        }
        ?>
          
        </div>

        <h4>Latest Recipe</h4>
        <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-4">
          <div class="col mb-3">
            <img src="https://source.unsplash.com/300x240/?food" alt="" class="w-100 rounded">
            <h5>Recipe 1</h5>
            <small>Category</small>
          </div>
          
          <div class="col mb-3">
            <img src="https://source.unsplash.com/300x240/?food" alt="" class="w-100 rounded">
            <h5>Recipe 1</h5>
            <small>Category</small>
          </div>
          
          <div class="col mb-3">
            <img src="https://source.unsplash.com/300x240/?food" alt="" class="w-100 rounded">
            <h5>Recipe 1</h5>
            <small>Category</small>
          </div>
          
          <div class="col mb-3">
            <img src="https://source.unsplash.com/300x240/?food" alt="" class="w-100 rounded">
            <h5>Recipe 1</h5>
            <small>Category</small>
          </div>
        </div>
      </div>
      <div class="border-top text-center">
        Copyright 2020 | About | Contact | Terms | Privacy Policy 
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
