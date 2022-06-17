<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- font awesome -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Panier</title>
</head>
<body>
    <?php
        include 'assets/layout/nav.php'; // include le header
    ?>
    <main>

    </main>
    <script>
        function afficherLocalStorage(){
            let articles = JSON.parse(localStorage.getItem("articles")); // récupère les articles du localStorage
                let div = document.createElement("div");
                document.getElementsByTagName("main")[0].appendChild(div);
                //insére les articles dans le DOM
                articles.forEach(element => {
                    let article = document.createElement("div");
                    article.className = "article-detaile";
                    div.appendChild(article);
                    let etiquette = document.createElement("div");
                    etiquette.className = "etiquette";
                    article.appendChild(etiquette);
                    let img = document.createElement("img");
                    img.src = element.etiquette;
                    etiquette.appendChild(img);
                    let description = document.createElement("div");
                    description.className = "descriptions";
                    article.appendChild(description);
                    let titre = document.createElement("h3");
                    titre.innerHTML = element.titre;
                    description.appendChild(titre);
                    let prix = document.createElement("p");
                    prix.innerHTML = element.prix + "€";
                    description.appendChild(prix);
                    let br = document.createElement("br");
                    br.innerHTML = "";
                    prix.appendChild(br);
                    let button = document.createElement("button");
                    button.innerHTML = "Supprimer";
                    prix.appendChild(button);
                    button.className = "supprimerr";
                    button.addEventListener("click", function(){
                        
                    });
                });
        }
        afficherLocalStorage()
    
    </script>
</body>
</html>