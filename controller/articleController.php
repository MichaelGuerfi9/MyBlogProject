<?php

require_once('../model/articleModel.php');
require_once('../model/commentModel.php');

function showArticles() {
	$articleModel = new articleModel();
	$article = $articleModel -> getArticles();
    include('../view/viewHome.php');
}

function showArticleById($idArticle){
	$articleModel = new articleModel();
	$article = $articleModel -> getArticle($idArticle);
	$commentModel = new commentModel();
    $comment = $commentModel -> getComments($idArticle);
    include('../view/viewArticle.php');
}