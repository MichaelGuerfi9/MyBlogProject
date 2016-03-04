<?php
require_once("../config/connectBDD.php");

session_start();

$errormessage = null;

if(isset($_POST['username'])){
  global $bdd;
  $bdd = getBdd();
  $stmt = $bdd->prepare("SELECT * FROM user 
                         WHERE use_login = :use_login");
  $stmt->bindParam("use_login",$_POST['username']);
  $stmt->execute();
  $result = $stmt->fetch();
  if($result === false){
    $errormessage = "Wrong username";
  }elseif (empty($_POST["password"])) {
    $errormessage = "No password";
  }elseif (sha1($_POST["password"]) != $result["use_password"]) {
    $errormessage = "Wrong password";
  }else{
    $_SESSION['user'] = $result["use_login"];
    header("Location: ../index.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>PokéManiac | Connexion</title>
</head>
<body>
  Merci de vous connecter :
  <form method="POST">
  Login : <input type="text" name="username"><br>
  Password : <input type="text" name="password"><br>
  <input type="submit" value="Se connecter">
  </form>
  <?php echo $errormessage;?>
</body>
</html>