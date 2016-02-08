<?php
require_once("model/connexion.php");
session_start();
if(isset($_POST['logout'])){
    unset($_SESSION['user']);
}
if(isset($_SESSION['user'])){
    header("Location: /index.php");
    exit;
}
$errormessage = null;
if(isset($_POST['username'])){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users
                         WHERE login = :login");
    $stmt->bindParam("login",$_POST['username']);
    $stmt->execute();
    $result = $stmt->fetch();
    if($result === false){
        $errormessage = "Wrong username";
    }elseif (empty($_POST["password"])) {
        $errormessage = "No password";
    }elseif (sha1($_POST["password"]) != $result["password"]) {
        $errormessage = "Wrong password";
    }else{
        $_SESSION['user'] = $result["login"];
        header("Location: /index.php");
        exit;
    }
}
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
<?php echo $errormessage;?>
</body>
</html>