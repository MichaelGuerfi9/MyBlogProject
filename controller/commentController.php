<?php

require_once('model/commentModel.php');

function postComment($login, $article, $comment){
	$commentModel = new commentModel();
	$comment = $commentModel -> addComment($login, $article, $comment);
    include('view/viewArticle.php');
}