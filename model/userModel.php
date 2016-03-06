<?php
    require_once('model/connectBDD.php');
    class userModel{
        function getUser($idUser){
            global $bdd;
            $bdd = getBdd();
            $user = $bdd->query('SELECT use_login, use_email FROM user WHERE use_id ='.$idUser);
            return $user;
        }