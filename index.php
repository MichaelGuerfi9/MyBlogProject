<?php
  require_once("model/connexion.php");
  global $pdo;
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: /login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PokéManiac</title>
</head>
<body>
  <h1>Bonjour <?php echo $_SESSION['user']; ?></h1>
</body>
</html>