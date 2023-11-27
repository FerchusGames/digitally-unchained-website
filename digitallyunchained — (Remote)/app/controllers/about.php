<?php
  use \Utilities\Utilities as utilities;

  class About extends \System\Core
  {
    public function __construct()
    {
      parent::__construct();
    }

    public function main()
    {
      $data = [];

      $reasons = $this->load->model('reasons');
      $data['reasons'] = $reasons->getReasons();

      $dataTop["CSSLibs"] = [
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
      ];
      $dataBottom["JSLibs"] = [
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        URL."/js/about.js",
      ];

      $this->load->view('layout/top', $dataTop);
      $this->load->view('screens/about', $data);
      $this->load->view('layout/footer');
      $this->load->view('layout/bottom', $dataBottom);
    }
  }
?>