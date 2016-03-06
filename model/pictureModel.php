<?php
    require_once('model/connectBDD.php');
    class pictureModel{
        function getPictureIcon($idArticle) {
            global $bdd;
            $bdd = getBdd();
            $article = $bdd->query('SELECT * FROM picture where pic_art_id ='.$idArticle.' and pic_type = "icon"');
            return $article;
        }

        function getPicturePicture($idArticle) {
            global $bdd;
            $bdd = getBdd();
            $article = $bdd->query('SELECT * FROM picture where pic_art_id ='.$idArticle.' and pic_type = "picture"');
            return $article;
        }
    }