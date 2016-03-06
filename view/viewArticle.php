<?php 
session_start();
ob_start();
require_once ('controller/commentController.php');
if(isset($_POST['logout'])){
  unset($_SESSION['user']);
}

?>
<?php foreach ($article as $articleId): ?>
<?php $titre = 'Pokémaniac | '.$articleId['art_title']; ?>
<article>
    <h1 class='titleArticle'><?= $articleId['art_title'] ?></h1>
    <time><?= $articleId['art_date'] ?></time>
    <p><?= $articleId['art_content'] ?></p>
</article>
<h1 id='titreReponses'>Réponses à <?= $articleId['art_title'] ?></h1>
<?php endforeach; ?>
<?php foreach ($comment as $comments): ?>
    <p><?= $comments['use_login'] ?> dit :</p>
    <p><?= $comments['com_content'] ?></p>
<?php endforeach; ?>
<?php if(isset($_SESSION['user'])){
    echo "Ecrire un commentaire:
	<form name='commentForm' method='POST'>
		<textarea name='commentText' type='textarea' rows='10' cols='50'>Saisir un commentaire</textarea><br>
		<input id='comment' type='submit'>
	</form>";
}else{
    echo "Veuillez vous connecter si vous voulez poster un commentaire.";
}

?>
<?php $contenu = ob_get_clean(); ?>

<?php require_once('home.php'); ?>