<?php 
session_start();
var_dump($_SESSION['username']);
if(!isset($_SESSION['username'])):
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Bmazon</title>
    </head>
    <body>
    <nav>
      <ul class="nav_links">
        <li><a href="index.php"><img src="./logo.svg" alt="logo" width="30rem" height="30rem"></img>Bmazon</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.php">Créez un compte</a></li>
      </ul>
    </nav>

    <div class="articles-container">
      <div class="article" id="0">
        <img src="./images/robotapsi.jpg" alt="Robot aspirateur" width="250px" height="250px">
        <h2 class="title" id="0">Robot Aspirateur</h2>
        <p class="description" id="0">Robot aspirateur connecté grâce à la toute nouvelle application iVacc<br>
          Absorbe même les poils d'animaux <br>
          Routes et horraires programmables
        </p>
        <p class="price" id="0">299,99 €</p>
      </div>

      <div class="article" id="1">
        <img src="./images/oculus.jpg" alt="Oculus Quest 2" width="250px" height="250px">
        <h2 class="title" id="1">Oculus Quest 2</h2>
        <p class="description" id="1"> Casque Vr indépendant <br>
          Stockage: 64 Go<br>
          Autonomie: 6h
          Vivez des expériences défiant les limites du réel.
        </p>
        <p class="price" id="1">449,99€</p>
      </div>

      <div class="article" id="2">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>

      <div class="article" id="3">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>

      <div class="article" id="4">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>

      <div class="article" id="5">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>
    </div>
  </body>
</html>

<?php
else:
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Bmazon</title>
    </head>
    <body>
    <nav>
      <ul class="nav_links">
        <li><a href="index.php"><img src="./logo.svg" alt="logo" width="30rem" height="30rem"></img>Bmazon</a></li>
        <li><a href="account.php">Mon compte</a></li>
        <li><a href="account.php">Déconnexion</a></li>
      </ul>
    </nav>

    <div class="articles-container">
      <div class="article" id="0">
        <img src="./images/robotapsi.jpg" alt="Robot aspirateur" width="250px" height="250px">
        <h2 class="title" id="0">Robot Aspirateur</h2>
        <p class="description" id="0">Robot aspirateur connecté grâce à la toute nouvelle application iVacc<br>
          Absorbe même les poils d'animaux <br>
          Routes et horraires programmables
        </p>
        <p class="price" id="0">299,99 €</p>
      </div>

      <div class="article" id="1">
        <img src="./images/oculus.jpg" alt="Oculus Quest 2" width="250px" height="250px">
        <h2 class="title" id="1">Oculus Quest 2</h2>
        <p class="description" id="1"> Casque Vr indépendant <br>
          Stockage: 64 Go<br>
          Autonomie: 6h
          Vivez des expériences défiant les limites du réel.
        </p>
        <p class="price" id="1">449,99€</p>
      </div>

      <div class="article" id="2">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>

      <div class="article" id="3">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>

      <div class="article" id="4">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>

      <div class="article" id="5">
        <img src="" alt="">
        <h2 class="title" id="0"></h2>
        <p class="description" id="0"></p>
        <p class="price" id="0"></p>
      </div>
    </div>
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

.articles-container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-evenly;
  align-items: center;
  border: solid red 2px;
  margin-left: 2rem;
  margin-right: 2rem;
  margin-top: 1rem;
}

.description, .price, h2 {
  width: 250px;
  text-align: center;
}

.description {
  font-size: 0.6rem;
  color: grey;
}

.price {
  font-weight: bold;
}
</style>