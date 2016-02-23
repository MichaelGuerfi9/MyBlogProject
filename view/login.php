<?php
 require_once ('../controller/verifLogin.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PokéManiac</title>
</head>
<body>
Merci de vous connecter :
<form method="POST">
    Login : <input type="text" name="username"><br>
    Password : <input type="text" name="password"><br>
    <input type="submit" value="Se connecter">
</form>

<h3>Si vous n'avez pas de compte veuillez vous inscrire</h3>
<form method="post" action="inscription.php">
    <input type="submit" name="inscription" value="Inscription">
</form>
<?php echo $errormessage;?>
</body>
</html>