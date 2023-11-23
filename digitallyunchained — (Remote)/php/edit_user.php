<?php
  require('connect.php');
  $id = mysqli_real_escape_string($connect, $_POST['id']);
  $firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($connect, $_POST['lastName']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);


  if($firstName == '' or $lastName == '' or $email == '')
  {
    echo 'Please fill all the fields';
  }

  else {
    $query = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email' and visible='1' and id != '$id'");
    
    if($query->num_rows > 0)
    {
      echo 'The email is unavailable. Please choose another one.';
    }
    else
    {
      $edit = mysqli_query($connect, "UPDATE users SET email='$email', firstName='$firstName', lastName='$lastName' WHERE id='$id'");

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