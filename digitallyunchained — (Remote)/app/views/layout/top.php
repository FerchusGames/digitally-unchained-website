<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3HDK1K9LJD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3HDK1K9LJD');
</script>

  <title>Digitally Unchained</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= URL?>/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= URL?>/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= URL?>/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= URL?>/site.webmanifest">
  <link rel="mask-icon" href="<?= URL?>/images/favicon/safari-pinned-tab.svg" color="#f7acaa">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <?php 
    if(isset($CSSLibs) and is_array($CSSLibs) and !empty($CSSLibs)){
        
      foreach ($CSSLibs as $key => $lib) {
        echo "<link rel=\"stylesheet\" href=\"$lib\">\n";
      }
        
    }
  ?>
  <link rel='stylesheet' href='<?=URL?>/assets/css/style.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <?php 
    if(isset($JSLibs) and !empty($JSLibs)){
      foreach ($JSLibs as $key => $value) {
        echo '<script src="'.$value.'"></script>'."\n";
      }
    }
  ?>
</head>
<body>
  <?php
  $menu = [
    "start" => "Start Now",
    "about" => "About Us",
  ];
  $router = System\Router::getInstance();
  $this->view("layout/header", ["menu" => $menu, "current" => $router->getController()]);
  ?>