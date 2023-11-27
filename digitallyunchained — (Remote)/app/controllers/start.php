<?php
  use \Utilities\Utilities as utilities;

  class Start extends \System\Core
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
      ];

      $this->load->view('layout/top', $dataTop);
      $this->load->view('screens/start');
      $this->load->view('layout/footer');
      $this->load->view('layout/bottom', $dataBottom);
    }
  }
?>