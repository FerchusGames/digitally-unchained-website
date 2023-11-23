<?php
use \Utilities\Utilities as Utilities;

class Banners extends System\Core
{
  private $pdo;
  public function __construct()
  {
    parent::__construct();
    $this->pdo = \Db\Dbpdo::getInstance();
  }

  public function getBanners() : array
  {
    $response = [];
    $url = URL.'/images/banners/';
    $sql = "SELECT id, name, concat('$url',image) as image FROM banners WHERE active=1 order by orderImage asc";
    $params = [];
    $limit = 1;
    $response = $this->pdo->selectSQL($sql, $params);
    return $response;
  }
}
?>