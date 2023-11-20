<?php
echo'
<div class="product col-md-2 mb-2">
  <div class="card h-100">
    <img src="'.$product['image'].'" class="card-img-top" alt="'.$product['name'].'">
    <div class="card-body">
      <h5 class="card-title">'.$product['name'].'</h5>
      <p class="card-text">$'.$product['price'].'</p>
    </div>
    <div class="card-footer">
      <a href="#" class="btn btn-lg btn-add" data-product="'.$product['id'].'">Añadir a carrito</a>
    </div>
  </div>
</div>'
?>
