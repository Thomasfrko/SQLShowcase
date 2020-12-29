<?php
require_once "config.php";
session_start();

if(isset($_SESSION['username'])):
  $username = $_SESSION['username'];
  $dataAddr = mysqli_fetch_array(mysqli_query($id, "SELECT * FROM adresse WHERE username = '$username'"));
  $dataBank = mysqli_fetch_array(mysqli_query($id, "SELECT * FROM bankinfo WHERE owner = '$username'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav>
    <ul class="nav_links">
      <li><a href="index.php"><img src="./logo.svg" alt="logo" width="30rem" height="30rem"></img>Bmazon</a></li>
      <li><a href="account.php">Mon compte</a></li>
      <li><a href="deconnect.php">Déconnexion</a></li>
    </ul>
  </nav>

  <h2> Bienvenue <?php echo $dataAddr[1] ?> !</h2>

  <main>
    <div class="adresseLivraison">
      <h4> Adresse de livraison </h4>
      Mr.<input type="radio" id="Mr." name="genre" value="Mr."></input>
      M.<input type="radio" id="M." name="genre" value="M."></input><br>
      <label for="prénom">Prénom: </label>
      <input type="text" placeholder="Prénom" name="prénom" value="<?php echo $dataAddr[7] ?>"></input><br>
      <label for="nom">Nom: </label>
      <input type="text" placeholder="Nom" name="nom" value="<?php echo $dataAddr[6] ?>"></input><br>
      <label for="adresse">Adresse: </label>
      <input type="text" placeholder="Adresse" name="adresse" value="<?php echo $dataAddr[5] ?>"></input><br>
      <label for="ville">Ville: </label>
      <input type="text" placeholder="Ville" name="ville" value="<?php echo $dataAddr[2] ?>"></input><br>
      <label for="postal">Code postal: </label>
      <input type="text" placeholder="Code Postal" name="postal" value="<?php echo $dataAddr[4] ?>"></input>
    </div>
    <div class="adresseFacture">
      <h4> Adresse de facturation </h4>
      Mr.<input type="radio" id="Mr." name="genre" value="Mr."></input>
      M.<input type="radio" id="M." name="genre" value="M."></input><br>
      <label for="prénom">Prénom: </label>
      <input type="text" placeholder="Prénom" name="prénom" value="<?php echo $dataAddr[7] ?>"></input><br>
      <label for="nom">Nom: </label>
      <input type="text" placeholder="Nom" name="nom" value="<?php echo $dataAddr[6] ?>"></input><br>
      <label for="adresse">Adresse: </label>
      <input type="text" placeholder="Adresse" name="adresse" value="<?php echo $dataAddr[5] ?>"></input><br>
      <label for="ville">Ville: </label>
      <input type="text" placeholder="Ville" name="ville" value="<?php echo $dataAddr[2] ?>"></input><br>
      <label for="postal">Code postal: </label>
      <input type="text" placeholder="Code Postal" name="postal" value="<?php echo $dataAddr[4] ?>"></input>
    </div>
    <div class="bank">
      <h4> Ajouter une carte bancaire </h4>
      <label for="cardnumber">N° de carte bancaire: </label>
      <input type="text" placeholder="XXXX-XXXX-XXXX-XXXX" name="cardnumber" value="<?php echo $dataBank[2] ?>"></input><br>
      <label for="date">Date d'expiration: </label>
      <input type="text" placeholder="01/21" name="date" value="<?php echo $dataBank[3] ?>"></input><br>
      <label for="secret">Code secret: </label>
      <input type="password" placeholder="XXX" name="secret" value="<?php echo $dataBank[4] ?>"></input>
    </div>
  </main>
</body>
</html>

<?php
endif;
?>

<style>
:root {
  font-size: 24px;
  font-family: Arial, Helvetica, sans-serif;

  --nav-bckg-color: #24252a;
  --main-color: #0088a9;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

li, a, button {
  color: white;
  text-decoration: none;
}

nav {
  display: flex;
  height: 1.8rem;
  background-color: var(--nav-bckg-color);
  z-index: 9999;
}

.nav_links {
  width: 100%;
  list-style: none;
  display: flex;
  justify-content: space-between;
  padding-top: 5px;
  padding-bottom: 5px;
}

.nav_links li {
  display: inline-block;
  padding: 0px 20px;
}

.nav_links li a, .sidenav li a {
  transition: all 0.3s ease 0s;
}

.nav_links li a:hover, .sidenav li a:hover {
  color: var(--main-color);   
}

body::-webkit-scrollbar {
  width: 0.25rem;
}

body::-webkit-scrollbar-track{
  background: #1e1e24;
}

body::-webkit-scrollbar-thumb{
  background: #6649b8;
}

main {
  margin-left: 15px;
}
</style>