<?php
  require('connect.php');

  $id = mysqli_real_escape_string($connect, $_POST['id']); 

  $delete = mysqli_query($connect, "UPDATE products SET visible='0' WHERE id='$id'");

  if($delete)
  {
    echo '1';
  }
  else
  {
    echo 'There was an error. Please report to the administrator.';
  }

  
?>