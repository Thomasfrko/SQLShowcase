<?php

  require_once "config.php";
  
  $test = mysqli_query($id, "SELECT * FROM users WHERE username='$username' AND password='$password'");
  
  if($test->num_rows != 0) {
    session_start();
  } else {
    include "index.php";
  }
?>