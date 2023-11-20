
  <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <ul class="carousel-indicators">
      <?php
        $a = 0;
        foreach ($banners as $key => $banner) {
          $active = ($a == 0) ? 'active' : '';
          echo '<li data-bs-target="#carouselId" data-bs-slide-to="'.$key.'" class="'.$active.'" aria-current="true" aria-label="Slide-'.$banner['name'].'"></li>';
        }
      ?>
    </ul>
    <div class="carousel-inner" role="listbox">
     <?php
        $a = 0;
        foreach ($banners as $key => $banner) {
          $active = ($a == 0) ? 'active' : '';
          echo '<div class="carousel-item '.$active.'">
                  <img src="'.$banner['image'].'" alt="'.$banner['name'].'">
                  <div class="carousel-caption d-none d-md-block">
                    <a href="#" class="btn btn-primary btn-lg">¡COMPRA YA!</a>
                  </div>
                </div>';
          $a++;
        }
     ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
  </div>