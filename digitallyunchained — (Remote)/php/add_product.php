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
      echo 'The email is already registered';
    }
    else
    {
      $insert = mysqli_query($connect, "INSERT INTO products (name, price, description, visible, date, time) VALUES ('$name', '$price', '$description', '1', '$date', '$time') ");

      if($insert)
      {
        echo '1';
      }
      else
      {
        echo 'There was an error. Please report to the administrator.';
      }
    }
  }
?>