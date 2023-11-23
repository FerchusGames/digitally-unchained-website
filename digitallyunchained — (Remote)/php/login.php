<?php
  require('connect.php');
  $email = mysqli_real_escape_string($connect, trim($_POST['email']));
  $password = mysqli_real_escape_string($connect, trim($_POST['password']));

  date_default_timezone_set('America/Mexico_City');
  $date = date('Y-m-d');
  $time = date('g:i a');

  if($email == '' or $password == '')
  {
    http_response_code(400);
    die('Please fill all the fields');
  }
  else {
    $query = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
    
    if($query->num_rows == 0)
    {
      http_response_code(401);
      die('Invalid email or password');
    }
    else
    {
      $query = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

      if($query->num_rows == 0)
      {
        http_response_code(401);
        die('Invalid email or password');
      }
      else
      {
        $con_user = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

        $data = mysqli_fetch_assoc($con_user);

        http_response_code(200);
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
      }
    }
  }
?>