<?php
  $user = 'root';
  $pass = 'your_password';

  if(!mysqli_connect("localhost",$user,$pass,'weather'))
  {
       die("shit... something didn't work... \n".mysql_error());
  }

?>
