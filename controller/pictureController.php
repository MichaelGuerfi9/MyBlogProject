<?php

require_once('model/pictureModel.php');

function showIconById($idArticle){
	$pictureModel = new pictureModel();
	$picture = $pictureModel -> getPictureIcon($idArticle);
    include('view/viewHome.php');
}