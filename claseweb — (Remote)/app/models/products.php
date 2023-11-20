<?php
use \Utilities\Utilities as Utilities;

class Products extends System\Core
{
  private $pdo;
  public function __construct()
  {
    parent::__construct();
    $this->pdo = \Db\Dbpdo::getInstance();
  }

  public function getProducts() : array
  {
    $response = [];
    $url = URL.'/images/products/';
    $sql = "SELECT id, name, price, concat('$url',image) as image FROM products WHERE active=1 order by orderImage asc";
    $params = [];
    $limit = 1;
    $response = $this->pdo->selectSQL($sql, $params);
    return $response;
  }

  public function getProductById($productId)
  {
    $sql = "SELECT * FROM products WHERE id = :id";
    $params = [':id' => $productId];
    $response = $this->pdo->selectSQL($sql, $params, null, null, true);
    if (empty($response)) {
      $response = false;
    }
    return $response;
  }
}
?>