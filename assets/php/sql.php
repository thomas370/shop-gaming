<?php

require "connexion.php"; //appelle au fichier de la connection à la BDD
if (array_key_exists('id_article', $_GET) && is_numeric($_GET['id_article'])) {
    $id = $_GET['id_article'];
    $query1 = $connexion->prepare("SELECT * FROM article INNER JOIN categorie ON categorie.id_cate = article.id_cate INNER JOIN platform ON platform.id_plat = article.id_plat WHERE id_article = ?");
    $query1->execute([$id]);
    $article2 = $query1->fetchAll();
}

if (array_key_exists('categorie', $_GET) && !empty($_GET['categorie'])) {//si le champ de recherche est rempli
    $categorie = $_GET['categorie'];
    $query = $connexion->prepare("SELECT * FROM categorie INNER jOIN article ON article.id_cate = categorie.id_cate  WHERE categorie.id_cate LIKE $categorie");
    $query->execute();
    //recharger la page avec le resultat de la recherche.
    header("Location:index.php?categorie=$categorie");
    $art = $query->fetchAll();

    }else{
        $query1 = $connexion->prepare('SELECT * FROM article INNER JOIN categorie ON categorie.id_cate = article.id_cate INNER JOIN platform ON platform.id_plat = article.id_plat');
        $query1->execute();
        $art = $query1->fetchAll();
    }

