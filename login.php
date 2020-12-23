<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $base = 'sql';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $id=mysqli_connect($host,$user,$pass);
  mysqli_select_db($id, $base) or die("Impossible de sélectionner la base : $base");
  
  $test = mysqli_query($id, "SELECT * FROM users WHERE `username`=$username AND `password`=$password");
  //echo "SELECT * FROM users WHERE `username`=$username AND `password`=$password";
  while ($row = mysqli_fetch_array($test))
  {
    print_r($row[1]);
    print_r($row[2]);
  } 
?>