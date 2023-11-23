<?php

class Shopping extends \System\Core
{

  public $pdo;

  public function __construct()
  {
    parent::__construct();
    $this->pdo = \Db\Dbpdo::getInstance();
    $this->initialize();
  }

  public function initialize(){
    if(!isset($_SESSION["Cart"])){
      $_SESSION["Cart"] = [
        "Items" => [],
        "Total" => 0,
        "TotalItems" => 0
      ];
    }
  }

  public function add($dataProduct)
  {
    $response = [
      "status" => false,
      "message" => [
        "title" => "Error!",
        "html" => "There was an error adding the product to the cart",
        "icon" => "error",
      ]
    ];
    //\Utilities\Utilities::print($dataProduct);
    if(isset($dataProduct["product"])){
      $id = $dataProduct["product"];
      $product = $this->load->model("products");
      $productInfo = $product->getProductById($id);
      if(!empty($productInfo)){
        if(isset($_SESSION["Cart"]["Items"][$id])){
        $_SESSION["Cart"]["Items"][$id]["quantity"]++;
        $_SESSION["Cart"]["Items"][$id]["total"] = $_SESSION["Cart"]["Items"][$id]["quantity"] * $_SESSION["Cart"]["Items"][$id]["price"];
        $_SESSION["Cart"]["Total"] += $_SESSION["Cart"]["Items"][$id]["price"];
        $_SESSION["Cart"]["TotalItems"]++;
        }
        else{
        // \Utilities\Utilities::print($dataProduct);
          $_SESSION["Cart"]["Items"][$id] = [
            "id" => $productInfo["id"],
            "name" => $productInfo["name"],
            "description" => $productInfo["description"],
            "image" => $productInfo["image"],
            "price" => $productInfo["price"],
            "quantity" => 1,
            "total" => $productInfo["price"]
          ];
          $_SESSION["Cart"]["Total"] += $_SESSION["Cart"]["Items"][$id]["price"];
          $_SESSION["Cart"]["TotalItems"]++;
        }
        $response = [
          "status" => true,
          "total" => number_format($_SESSION["Cart"]["Total"], 2), 
          "message" => [
            "title" => "Success!",
            "html" => "Product ad<strong>d</strong>ed to c<strong>art</strong>",
            "icon" => "success",
            "confirmButtonText" => "CLOSE THIS THING RIGHT NOW",
          ]
        ];
        $response["productData"] = $productInfo;
      }else{
        $response["message"]["html"] = "Product not found";
      }
    }
    return $response;
  }
}

?>