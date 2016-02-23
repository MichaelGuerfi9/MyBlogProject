

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PokeManiac - Inscription</title>
</head>
<body>
<h2>Veuillez vous inscrire</h2>
    <form name="inscription" method="post" action="index.php">
        <label for="pseudo">Entrez un pseudo : </label><input type="text" name="pseudo" id="pseudo"><br><br>
        <label for="password">Entrez votre mot de passe : </label><input type="password" name="password" id="password"><br><br>
        <label for="verifPassword">Retapez votre mot de passe : </label><input type="password" name="verifPassword" id="verifPassword" ><br><br>
        <label for="email">Entrez votre adresse mail : </label><input type="email" name="email" id="email"><br><br>
        <input type="submit" name="send" value="Envoyer"><br>
    </form>
</body>
<?php
require_once('../controller/verifInscription.php')
?>
</html>


