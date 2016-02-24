<?php ob_start(); ?>
<?php foreach ($article as $articleId): ?>
<?php $titre = 'Pokémaniac | '.$articleId['art_title']; ?>
<article>
    <header>
        <h1 class="titleArticle"><?= $articleId['art_title'] ?></h1>
        <time><?= $articleId['art_date'] ?></time>
    </header>
    <p><?= $articleId['art_content'] ?></p>
</article>
<header>
    <h1 id="titreReponses">Réponses à <?= $articleId['art_title'] ?></h1>
</header>
<?php endforeach; ?>
<?php foreach ($comment as $comments): ?>
    <p><?= $comments['use_login'] ?> dit :</p>
    <p><?= $comments['com_content'] ?></p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require_once('home.php'); ?>