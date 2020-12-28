<?php
  require_once "config.php";

  $username = $password = $confirm_password = "";
  $username_err = $password_err = $confirm_password_err = "";
  $failToRegister = "";
  $error = false;

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validation username
    if(empty($_POST["username"])){
      $username_err = "* Veuillez entrer un nom d'utilisateur";
      $error = true;
    }

    //Validation password
    $uppercase = preg_match('/[A-Z]/', $_POST["password"]);
    $lowercase = preg_match('/[a-z]/', $_POST["password"]);
    $number = preg_match('/[0-9]/', $_POST["password"]);
    $special = preg_match('/[^a-zA-Z0-9_ -]/', $_POST["password"]);

    if(empty($_POST["password"])){
      $password_err = "* Veuillez entrer un mot de passe";
    } else if (strlen($_POST["password"]) < 8  || !$uppercase || !$lowercase || !$number || !$special) {
      $password_err = "* Le mot de passe doit contenir au moins 8 caractères, dont un chiffre, une minuscule, une majuscule et un caractère spécial.";
      $error = true;
    }

    // Validation confirm password
    if(empty($_POST["confirmpassword"])){
      $confirm_password_err = "* Veuillez confirmer votre mot de passe";
    } else if ($_POST["confirmpassword"] != $_POST["password"]) {
      $confirm_password_err = "Les mots de passe ne correspondent pas.";
      $error = true;
    }

    if(!$error) {
      //$sqlQuery = mysqli_query("INSERT * FROM users WHERE username='$username' AND password='$password");
      session_start();
      $_SESSION['username'] = $_POST['username'];
      header('location:account.php');
    }
    
    /*else {

      if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = trim($_POST["username"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                $username_err = "This username is already taken.";
            } else{
                $username = trim($_POST["username"]);
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
      }
    }

    // Check input errors before inserting in database
     if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){     
      // Prepare an insert statement
      $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
          
      if($stmt = mysqli_prepare($link, $sql)){
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
          
          // Set parameters
          $param_username = $username;
          $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
          
          // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt)){
              // Redirect to login page
              header("location: login.php");
          } else{
              echo "Something went wrong. Please try again later.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
      }
    }

    // Close connection
    mysqli_close($link);*/
  }
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
  <form class="account-box"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); /*$_SERVER["PHP_SELF"];*/?>">
    <h1>Créez un compte</h1>
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <span class="error"> <?php echo $username_err;?></span>
    <input type="password" name="password" placeholder="Mot de passe">
    <span class="error"> <?php echo $password_err;?></span>
    <input type="password" name="confirmpassword" placeholder="Confirmez votre mot de passe">
    <span class="error"> <?php echo $confirm_password_err;?></span>
    <input type="submit" name="submit" value="Créez un compte">
    <p>Vous-avez déjà un compte ?  <a href="login.php">Identifiez-vous ici  </a>.</p>
  </form>
</body>
</html>

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

.account-box {
  width: 450px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background-color: #1e1e24;
  text-align: center;
}

.account-box h1 {
  color: white;
  font-weight: 500;
}

.account-box input[type = "text"], .account-box input[type = "password"] {
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #0088a9;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}

.account-box input[type = "text"]:focus, .account-box input[type = "password"]:focus {
  width: 280px;
  border-color: #6649b8;
}

.account-box input[type = "submit"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #6649b8;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

.account-box input[type = "submit"]:hover{
  background-color: #6649b8;
}

p {
  color: white;
  font-size: 12px;
}

p a {
  color: #1a76f8;
}

p a:hover {
  color: #598eda;
}

.error {
  color: red;
  font-size: 14px;
}

</style>