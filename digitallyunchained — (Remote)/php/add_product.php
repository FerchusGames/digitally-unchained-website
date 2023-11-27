<?php
  require('connect.php');
  $name = mysqli_real_escape_string($connect, $_POST['name']);
  $price = mysqli_real_escape_string($connect, $_POST['price']);
  $description = mysqli_real_escape_string($connect, $_POST['description']);

  date_default_timezone_set('America/Mexico_City');
  $date = date('Y-m-d');
  $time = date('g:i a');

  if($name == '' or $price == '' or $description == '')
  {
    echo 'Please fill all the fields';
  }

  if(!is_numeric($price))
  {
    echo 'Price should be numeric';
  }

  else {
    $query = mysqli_query($connect, "SELECT * FROM products WHERE name = '$name' and visible = '1'");
    $count = mysqli_num_rows($query);
    
    if($count > 0)
    {
      echo '0';
    }
    else
    {
      $insert = mysqli_query($connect, "INSERT INTO products (name, price, description, visible, date, time) VALUES ('$name', '$price', '$description', '1', '$date', '$time') ");

      if ($insert) {
        $id = mysqli_insert_id($connect);
        echo $id;
      } 
      
      else
      {
        echo '0';
      }
    }
  }
?>