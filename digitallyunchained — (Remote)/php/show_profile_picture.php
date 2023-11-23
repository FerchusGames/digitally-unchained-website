<?php
  require('connect.php');

  $id = mysqli_real_escape_string($connect, $_POST['id']);
  $query = mysqli_query($connect, "SELECT profilePicture FROM users WHERE visible='1' AND id='$id'");

  $data = mysqli_fetch_assoc($query);

  if ($data['profilePicture'] != '') {
    $image_name = $data['profilePicture'];
  }
  
  else if ($data['profilePicture'] == '') {
    $image_name =  'default_profile_picture.jpg';
  }
  
  $dir = 'https://www.digitallyunchained.rociochavezml.com/assets/images/profile/'.$image_name;

  echo $dir;
?>