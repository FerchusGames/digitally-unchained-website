<?php
  class Arithmetic extends \System\Core
  {
    public function __construct()
    {
      parent::__construct();
    }

    public function add($a, $b) : int 
    { 
      return $a + $b; 
    }
  }
?>