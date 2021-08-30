<?php require_once('header.php'); ?>
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


        <?php
        include('inc/db.php');
        $sql = "SELECT id,title,category FROM recipes";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            <div class="col mb-3">
              <img src="https://source.unsplash.com/300x240/" alt="" class="w-100 rounded">
              <h5><?php echo $row['title']; ?></h5>
              <small><?php echo $row['category']; ?></small>
            </div>
            <?php
          }
        }
        ?>
        </div>
      </div>
<?php include('footer.php'); ?> 