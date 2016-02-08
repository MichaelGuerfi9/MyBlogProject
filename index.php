<?php
<<<<<<< HEAD
require_once("model/connexion.php");
global $pdo;
session_start();
if(!isset($_SESSION['user'])){
    header("Location: /login.php");
    exit;
}
=======
  require_once("model/connexion.php");
  global $pdo;
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: /login.php");
    exit;
  }
>>>>>>> origin/master
?>
<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <title>PokéManiac</title>
</head>
<body>
<h1>Bonjour <?php echo $_SESSION['user']; ?></h1>
=======
  <meta charset="UTF-8">
  <title>PokéManiac</title>
</head>
<body>
  <h1>Bonjour <?php echo $_SESSION['user']; ?></h1>
>>>>>>> origin/master
</body>
</html>