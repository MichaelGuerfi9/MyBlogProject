<?php
require_once('../config/connectBDD.php');
	class commentModel{
	    function getComments($idArticle) {
	        global $bdd;
	        $bdd = getBdd();
	        $comments = $bdd->prepare('SELECT * FROM commentary JOIN article ON com_art_id = art_id JOIN user ON com_use_id = use_id where art_id =?');
	        $comments->execute(array($idArticle));
	        return $comments;
	    }

	    function addComment($login, $article, $comment){
	    	global $bdd;
	    	$bdd = getBdd();
	    	$comments = $bdd->prepare('	INSERT INTO commentary (com_content, com_use_id, com_art_id)
										SELECT "'.$comment.'", use_id, '.$article.'
										FROM user
										WHERE use_login = "'.$login.'")');
	    	$comments->execute();
	    }
	}