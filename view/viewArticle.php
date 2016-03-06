<?php 
session_start();
ob_start();
 
if(isset($_POST['logout'])){
  unset($_SESSION['user']);
}

?>
<?php foreach ($article as $articleId): ?>
<?php $titre = 'Pokémaniac | '.$articleId['art_title']; ?>
    <article class='article'>
	    <div class="titleArticle">
		    <?= $articleId['art_title'] ?>
		</div>
		<div class='authorBlock'>Par <?= $articleId['use_login']?>, le <?= $articleId['date'] ?> à <?= $articleId['heure'] ?></div>
<?php if(isset($_SESSION['user'])){
	echo "Ecrire un commentaire:
	<form name='commentForm' method='POST'>
		<textarea name='commentText' type='textarea' rows='10' cols='50'>Saisir un commentaire</textarea><br>
		<input type='submit'>
	</form>";
	}else{
		echo "Veuillez vous connecter si vous voulez poster un commentaire.";
	}
?>
<div id='titreReponses'><b>Réponses à <?= $articleId['art_title'] ?></b></div>
<?php endforeach; ?>
<?php foreach ($comment as $comments): ?>
    <p><?= $comments['use_login'] ?> dit :</p>
    <p><?= $comments['com_content'] ?></p>
<?php endforeach; ?>
	</article>
<?php $contenu = ob_get_clean(); ?>

<?php require_once('home.php'); ?>