<?php
require_once("../config/connexion.php");
session_start();
if(isset($_POST['logout'])){
    unset($_SESSION['user']);
}
if(isset($_SESSION['user'])){
    header("Location: ../view/index.php");
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
        header("Location: index.php");
        exit;
    }
}