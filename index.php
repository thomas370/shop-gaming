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
    <title>Jeux-Flex</title>
</head>
<body>
    <?php
        include 'assets/layout/nav.php'; // include la nav
    ?>
    <?php
        include 'assets/layout/header.php'; // include le header
    ?>
    
    <main>
            <!--systeme de recherche-->
            <div class="recherche">
                <form id="cherche"action="assets/php/sql.php" method="GET">
                    <input type="text" name="recherche" id="recherche" placeholder="Rechercher un jeu">
                    De<input type="number" name="prix" id="prix" placeholder="Prix"> à <input type="number" name="prix2" id="prix" placeholder="Prix">
                    <select name="categorie" id="categori">
                        <option value="">Catégorie</option>
                        <option value="FPS">FPS</option>
                        <option value="Aventure">Aventure</option>
                        <option value="Combat">Combat</option>
                        <option value="Course">Course</option>
                        <option value="jeux de gestion">jeux de gestion</option>
                        <option value="Sport">Sport</option>
                        <option value="MMO">MMO</option>
                    </select>
                </form>
            </div>
        </div>

        <div class="container-general">
            <?php foreach($art as $article) : ?>
                <a href="article.php?id_article=<?= $article['id_article'] ?>">
                <div class="article">
                    <div class="article-img">
                        <div class="article-content">
                            <p class="hide"><?= $article['categorie'] ?></p>
                            <h2><?= $article['titre'] ?></h2>
                            <p><i class="fa-solid fa-tag"></i><?= $article['prix'] ?>€</p>
                        </div>
                    <img  class="card" src="<?= ($article["image"]) ?>" alt="card">
                    </div>
                </div>
               </a>
            <?php endforeach; ?>
        </div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){//quand le document est chargé
        $("#recherche").on("keyup", function() {//quand on tape dans le champ de recherche
            var value = $(this).val().toLowerCase();//on met le champ de recherche en minuscule
            $(".article").filter(function() {//on filtre les articles
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script>
//faire le trie par catégorie
$(document).ready(function(){
    $("#categori").on("change", function() {
        var value = $(this).val().toLowerCase();
        $(".article").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
</html>
