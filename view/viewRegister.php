<?php
require_once("../config/connectBDD.php");

session_start();

$errors = '';
$formOK = true;

if (isset($_POST['send'])) {
    if (!isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4) {
        $errors .= 'Saisissez un pseudo superieur à 3 caracteres<br>';
        $formOK = false;
    }

    if (!isset($_POST['password']) || strlen($_POST['password']) < 4) {
        $errors .= 'Saisissez un mdp superieur à 5 caracteres<br>';
        $formOK = false;
    }

    if (!isset($_POST['verifPassword']) || $_POST['verifPassword'] !== $_POST['password']) {
        $errors .= 'Saisissez une vérif identique au mdp<br>';
        $formOK = false;
    }

    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors .= 'Saisissez un email valide<br>';
        $formOK = false;
    }

}
if (isset($_POST['send']) && $formOK == true) {
	global $bdd;
  	$bdd = getBdd();
    $sql = $bdd->prepare("INSERT INTO `user` (`use_login`, `use_password`, `use_email`)
					VALUES(:pseudo,:password,:email)");
	$sql->execute(array(
    ':pseudo' => $_POST['pseudo'],
    ':email' => $_POST['email'],
    ':password' => sha1($_POST['password'])));

    $_SESSION['user'] = $_POST['pseudo'];
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PokeManiac | Inscription</title>
</head>
<body>
<h2>Veuillez vous inscrire:</h2>
    <form name="inscription" method="post" >
        <label for="pseudo">Entrez un pseudo : </label><input type="text" name="pseudo" id="pseudo"><br><br>
        <label for="password">Entrez votre mot de passe : </label><input type="password" name="password" id="password"><br><br>
        <label for="verifPassword">Retapez votre mot de passe : </label><input type="password" name="verifPassword" id="verifPassword" ><br><br>
        <label for="email">Entrez votre adresse mail : </label><input type="email" name="email" id="email"><br><br>
        <input type="submit" name="send" value="Envoyer"><br>
    </form>
    <?php echo $errors; ?>
</body>
</html>