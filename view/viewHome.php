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
            <a href="<?= "index.php?action=article&id=" . $articles['art_id'] ?>">
                <h1 class="titreArticle"><?= $articles['art_title'] ?></h1>
            </a>
            <time><?= $articles['art_date'] ?></time>
        <p><?= $articles['art_content'] ?></p>
    </article>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require_once('home.php'); ?>