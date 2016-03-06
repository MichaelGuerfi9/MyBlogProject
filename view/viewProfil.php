<?php 
require_once("../model/connectBDD.php");
session_start();
ob_start();
 
if(isset($_POST['logout'])){
  unset($_SESSION['user']);
}

global $bdd;
$bdd = getBdd();
$user = $bdd->prepare('SELECT use_login, use_email FROM user WHERE use_login ='.$_SESSION['user']);
$user->bindParam("use_login",$_SESSION['user']);
$user->execute();
$result = $user->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link href="../css/styles.css" rel="stylesheet" type="text/css">
  <title>Pokémaniac | Mon Profil</title>
</head>
<body>
	<?php
		echo'Pseudo: '.$result['use_login'].'<br>
		Email: '.$result['use_email'];
	?>
</body>
</html>