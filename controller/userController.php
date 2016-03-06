<?php

require_once('model/userModel.php');

function showUserById($idUser){
	$userModel = new userModel();
	$user = $userModel -> getUser($idUser);
    include('view/viewProfile.php');
}