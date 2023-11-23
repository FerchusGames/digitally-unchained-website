<?php

  header('Content-Type: application/json; charset=utf-8');

  require('connect.php');

  $query = mysqli_query($connect, "SELECT * FROM products WHERE visible='1'");
  $verification = mysqli_num_rows($query);

  $list = array();

  if($verification > 0)
  {
    while ($data = mysqli_fetch_assoc($query))
    {
      array_push($list, array(
        'id' => $data['id'],
        'name' => $data['name'],
        'price' => $data['price'],
        'description' => $data['description'],
      ));
    }

    echo json_encode($list, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  }
  else {
    {
      echo '0';
    }
  }
?>