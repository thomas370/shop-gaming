<?php
    require "assets/php/sql.php"; //appelle au fichier des requetes SQL
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- font awesome -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Article</title>
</head>
<body>
    <?php
        include 'assets/layout/nav.php'; // include le header
    ?>

    <main>
        <div class="article-all">
        <?php foreach($article2 as $art) : ?>
            <div class="article-detail">

                <div class="etiquette">
                <img id="etiquette" src="<?= ($art["etiquette"]) ?>" alt="etiquette">
                    <div class="description">
                        <h2><span id="titre"><?= $art['titre'] ?></span></h2>
                        <p>Prix: <span id="prix"><?= $art['prix'] ?></span>€ <i class="fa-solid fa-tag"></i></p>
                        <p>Date de mise en ligne: <span id="date"><?= $art['date'] ?></span></p>
                        <p>Description: <span id="description"><?= $art['description'] ?></span></p>
                        <p>Catégorie: <span id="cate"><?= $art['categorie'] ?></span></p>
                        <p>platform: <span id="platform"><?= $art['platform'] ?></span></p>
                        <button class="ajout-panier" onclick="ajoutPanier()">Ajouter au panier</button> 
                    </div>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
        </div>
    </main>
</body>
<script>
   function ajoutLocalStorage() {
         let articles = [];
        let article = {
            "titre": document.getElementById("titre").innerHTML,
            "prix": document.getElementById("prix").innerHTML,
            "date": document.getElementById("date").innerHTML,
            "description": document.getElementById("description").innerHTML,
            "categorie": document.getElementById("cate").innerHTML,
            "platform": document.getElementById("platform").innerHTML,
            "etiquette": document.getElementById("etiquette").src
        };
        if (localStorage.getItem("articles") === null) {
            articles.push(article);
            localStorage.setItem("articles", JSON.stringify(articles));
        } else {
            articles = JSON.parse(localStorage.getItem("articles"));
            articles.push(article);
            localStorage.setItem("articles", JSON.stringify(articles));
        }
    }

    function ajoutPanier() {
        ajoutLocalStorage();
        alert("Article ajouté au panier");

    }
</script>
</html>