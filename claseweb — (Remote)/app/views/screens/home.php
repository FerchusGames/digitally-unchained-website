
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
                    <a href="#" class="btn btn-lg">¡COMPRA YA!</a>
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
  <section class="new">
    <div class="new_container">
      <div class="img_new_container">
        <img src="<?= URL?>/images/seguro-min.png" alt="Imagen de seguro capa de oro" class="img-responsive">
      </div>
      <div class="info_new_container">
        <div class="title_new">RECIÉN <span>Llegados</span></div>
        <div class="description_new">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error molestias eveniet sequi qui architecto aspernatur adipisci, pariatur recusandae tenetur perspiciatis porro ab molestiae laudantium at consequuntur ut voluptatibus deserunt quo!</div>
        <a href="#" class="btn btn-lg">Discover more!</a>
      </div>
    </div>
  </section>
 
  <section class="products">
  <div class="products-container">
  <div class="title_new">LO MÁS <strong> VENDIDO</strong></div>
    <div class="product-slider">
      <?php
        foreach ($products as $key => $product) {
          $this->view('components/product', ["product" => $product]);
        }
      ?>
      </div>
    </div>
</section>      