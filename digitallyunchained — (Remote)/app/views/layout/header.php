<header>
  <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="<?=URL?>">
        <img src="<?=URL?>/images/company/DU_LogoDark.png" alt="" class="nav-logo">
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <?php
          foreach ($menu as $key => $item) {
            $active = "";
            if(substr_count($current, $key) > 0){
              $active = "active";
            }
            ?>
            <li class="nav-item">
              <a href="<?=URL.'/'.$key?>" class="nav-link <?=$active?>"><?=$item?></a>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  
</header>