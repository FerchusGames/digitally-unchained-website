<?php
  use \Utilities\Utilities as utilities;

  class Shoppingcart extends \System\Core
  {
    public $cart;
    public function __construct()
    {
      parent::__construct();
      $this->cart = $this->load->model('shopping');
    }

    public function main()
    {
      
    }

    function add(){
      $data = $this->cart->add($_POST);
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode($data);
    }
  }
?>