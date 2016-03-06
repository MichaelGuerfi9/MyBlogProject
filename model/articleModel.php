<?php
    require_once('model/connectBDD.php');
    class articleModel{
        function getArticles(){
            global $bdd;
            $bdd = getBdd();
            $articles = $bdd->query('SELECT art_id, art_title, art_content,DATE_FORMAT(art_date,"%d/%m/%Y") as date, DATE_FORMAT(art_date,"%H:%i") as heure, use_login FROM article JOIN user ON art_use_id = use_id ORDER BY art_date DESC');
            return $articles;
        }

        function getArticle($idArticle) {
            global $bdd;
            $bdd = getBdd();
            $article = $bdd->query('select * from article where art_id ='.$idArticle);
            return $article;
        }
    }