<?php
require_once('config.php');
include "sec.html";

if(isset($_POST['comment0'])) {
  $commentaire = $_POST['comment0'];
  $sql = mysqli_query($id, "INSERT INTO comments (article_name, commentaire) VALUES ('Robot Aspirateur', '$commentaire')");
}

if(isset($_POST['comment1'])) {
  $commentaire = $_POST['comment1'];
  $sql = mysqli_query($id, "INSERT INTO comments (article_name, commentaire) VALUES ('Oculus Quest 2', '$commentaire')");
}

header('Location:index.php');
?>