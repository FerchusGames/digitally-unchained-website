<?php
  use \Utilities\Utilities as utilities;

  class Index extends \System\Core
  {
    public function __construct()
    {
      parent::__construct();
    }

    public function main()
    {
      $data = [];
      $dataTop["CSSLibs"] = [
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
      ];
      $dataBottom["JSLibs"] = [
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        URL."/js/home.js",
        URL."/js/shoppingcart.js",
      ];
      $banners = $this->load->model('banners');
      $data['banners'] = $banners->getBanners();
      $products = $this->load->model('products');
      $data['products'] = $products->getProducts();

      $this->load->view('layout/top', $dataTop);
      $this->load->view('layout/header');
      $this->load->view('screens/home', $data);
      $this->load->view('layout/footer');
      $this->load->view('layout/bottom', $dataBottom);
    }

    function add($a, $b){
      $result = [];
      $arithmetic = $this->load->model('arithmetic');
      
      $addition = $arithmetic->add($a, $b);
      
      $result['result'] = $addition;
      $this->load->view('result', $result);
    }
    function session()  {
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode($_SESSION);
    }
  }
?>