<?php
use \Utilities\Utilities as Utilities;

class Reasons extends System\Core
{
  private $pdo;
  public function __construct()
  {
    parent::__construct();
    $this->pdo = \Db\Dbpdo::getInstance();
  }

  public function getReasons() : array
  {
    $response = [];
    $url = URL.'/images/reasons/';
    $sql = "SELECT id, title, description, concat('$url',image) as image FROM reasons WHERE visible=1";
    $params = [];
    $limit = 1;
    $response = $this->pdo->selectSQL($sql, $params);
    return $response;
  }

  public function getReasonById($reasonId)
  {
    $sql = "SELECT * FROM reasons WHERE id = :id";
    $params = [':id' => $reasonId];
    $response = $this->pdo->selectSQL($sql, $params, null, null, true);
    if (empty($response)) {
      $response = false;
    }
    return $response;
  }
}
?>