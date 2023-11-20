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
      $banners = $this->load->model('banners');
      $data['banners'] = $banners->getBanners();

      $this->load->view('layout/top');
      $this->load->view('layout/header');
      $this->load->view('screens/home', $data);
      $this->load->view('layout/bottom');
    }

    function add($a, $b){
      $result = [];
      $arithmetic = $this->load->model('arithmetic');
      
      $addition = $arithmetic->add($a, $b);
      
      $result['result'] = $addition;
      $this->load->view('result', $result);
    }
  }
?>