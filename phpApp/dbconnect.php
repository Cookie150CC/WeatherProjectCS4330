<?php
  $user = 'root';
  $pass = '';

  if(!mysqli_connect("localhost",$user,$pass,'weather'))
  {
       die("shit... something didn't work... \n".mysqli_error());
  }

?>
