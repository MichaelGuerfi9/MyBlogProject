<?php $titre = 'Pokémaniac  | Acceuil'; ?>

<?php 
session_start();
ob_start(); 
if(isset($_POST['logout'])){
  unset($_SESSION['user']);
}
?>
<?php foreach ($article as $articles): ?>
	<article>
		<img src="images/IconArticle/imgIconDefault.png">
	    <div class="titleArticle">
	    	<a href="<?= "index.php?action=article&id=" .$articles['art_id'] ?>"><?= $articles['art_title'] ?></a>
	   	</div>
	    <div class='authorBlock'>Par <?= $articles['use_login']?>, le <?= $articles['date'] ?> à <?= $articles['heure'] ?></div>
	</article>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require_once('home.php'); ?>