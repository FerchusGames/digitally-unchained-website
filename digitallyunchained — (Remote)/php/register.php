<?php
  require('connect.php');
  $firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($connect, $_POST['lastName']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);

  date_default_timezone_set('America/Mexico_City');
  $date = date('Y-m-d');
  $time = date('g:i a');

  if($firstName == '' or $lastName == '' or $email == '' or $password == '')
  {
    echo 'Please fill all the fields';
  }
  else {
    $query = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
    $count = mysqli_num_rows($query);
    
    if($count > 0)
    {
      echo 'The email is already registered';
    }
    else
    {
      $insert = mysqli_query($connect, "INSERT INTO users (firstName, lastName, email, password, visible, date, time) VALUES ('$firstName', '$lastName', '$email', '$password', '1', '$date', '$time') ");

      if($insert)
      {
        // echo 'Registered successfully';
        // echo 1;

        $con_user = mysqli_query($connect, "SELECT * FROM users WHERE firstName = '$firstName' AND lastName = '$lastName' AND email = '$email' AND password = '$password' AND visible = '1' AND date = '$date' AND time = '$time' ");

        $data = mysqli_fetch_assoc($con_user);

        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
      }
      else
      {
        // echo 'There was an error, please report to the administrator';
        echo 0;
      }
    }
  }
?>