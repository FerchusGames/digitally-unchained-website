<?php
require('connect.php');

$id = mysqli_real_escape_string($connect, $_POST['id']);

$letters = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$code = '';

for($i = 0; $i < 30; $i++){
  $code .= substr($letters, rand(0, strlen($letters) - 1), 1);
}

$new_image_name = $code.'.jpg';
$file_tmp = $_FILES['file']['tmp_name'];

$dir = '../assets/images/profile/'.$new_image_name;

$copy = move_uploaded_file($file_tmp, $dir);

if($copy)
{
  $edit = mysqli_query($connect, "UPDATE users SET profilePicture='$new_image_name' WHERE id='$id'");    

  //TODO: Delete old image from server

  if($edit){
    echo '1';
  }
  else{
    echo 'There was an error when updating the image on your profile.';
  }
}
else{
  echo 'There was an error when uploading the image.';
}

?>