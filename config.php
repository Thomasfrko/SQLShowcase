<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $base = 'sql';

  $id=mysqli_connect($host,$user,$pass);
  mysqli_select_db($id, $base) or die("Impossible de sélectionner la base : $base");
?>