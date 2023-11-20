<?php
  require('connect.php');
  $id = mysqli_real_escape_string($connect, $_POST['id']);
  $name = mysqli_real_escape_string($connect, $_POST['name']);
  $price = mysqli_real_escape_string($connect, $_POST['price']);
  $description = mysqli_real_escape_string($connect, $_POST['description']);

  if($name == '' or $price == '' or $description == '')
  {
    echo 'Please fill all the fields';
  }

  if(!is_numeric($price))
  {
    echo 'Price should be numeric';
  }

  else {
    $query = mysqli_query($connect, "SELECT * FROM products WHERE name = '$name' and visible='1' and id != '$id'");
    $count = mysqli_num_rows($query);
    
    if($count > 0)
    {
      echo 'The product name already exists. Please choose another one.';
    }
    else
    {
      $edit = mysqli_query($connect, "UPDATE products SET name='$name', price='$price', description='$description' WHERE id='$id'");

      if($edit)
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