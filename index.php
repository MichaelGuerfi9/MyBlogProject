<?php
require_once('controller/articleController.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'article') {
        if (isset($_GET['id'])) {
            $idArticle = intval($_GET['id']);
            if ($idArticle != 0) {
                showArticleById($idArticle);
            }
            else
                var_dump("Identifiant de billet non valide");
        }
        else
            var_dump("Identifiant de billet non défini");
    }
    else
        var_dump("Action non valide");
}
else {
    showArticles();
}