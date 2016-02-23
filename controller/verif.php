<?php
require_once('../model/connexion.php');
$errors = '';
$success = '';
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

    $sql = $pdo->prepare("INSERT INTO `users` (`login`, `password`, `email`)
VALUES(:pseudo,:password,:email)");
$sql->execute(array(
    ':pseudo' => $_POST['pseudo'],
    ':email' => $_POST['email'],
    ':password' => sha1($_POST['password'])));

    $success = "Bienvenue sur Pokémaniac ".$_POST['pseudo']. " !";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="success-message"><?php echo $success ?></div>
<div class="error-message"><?php echo $errors ?> </div>
</body>
</html>
