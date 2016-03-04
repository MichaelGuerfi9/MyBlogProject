<?php
    require_once('../config/connectBDD.php');
    class articleModel{
        function getArticles(){
            global $bdd;
            $bdd = getBdd();
            $articles = $bdd->query('SELECT * FROM article ORDER BY art_date DESC');
            return $articles;
        }

        function getArticle($idArticle) {
            global $bdd;
            $bdd = getBdd();
            $article = $bdd->query('select * from article where art_id ='.$idArticle);
            return $article;
        }
    }