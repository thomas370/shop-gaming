<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- font awesome -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login / Register</title>
</head>
<body>
    <?php
        include 'assets/layout/nav.php'; // include le header
    ?>

    <main>
        <div class="formulaire">
            <form id='connection'action="./assets/php/traitement.php" method="POST">
                <input id="connextion" type="text" name="pseudo" id="pseudo" placeholder="pseudo">
                <input id="connextion" type="password" name="password" id="password" placeholder="password">
                <input id="connextion" type="mail" name="mail" id="mail" placeholder="mail">
                <input type="submit" name="valider" value="Connexion">
                <p id="phrase" onclick="hide()">Inscrivez-vous</p>
            </form>
        </div>  
        <div class="inscription">
            <form id='inscription'action="./assets/php/traitement.php" method="POST">
                <input id="inscription" type="text" name="pseudo" id="pseudo" placeholder="pseudo">
                <input id="inscription" type="password" name="password" id="password" placeholder="password">
                <input id="inscription" type="mail" name="mail" id="mail" placeholder="mail">
                <input type="submit" name="valider" value="Inscription">
            </form>
        </div>
    </main>
</body>
<script>
   //si hide  est cliqué, le formulaire d'inscription s'affiche
    function hide() {
        var x = document.getElementById("inscription");
        if (x.style.display === "none") {
            x.style.display = "flex";
        } else {
            x.style.display = "flex";
        }
    }
</script>
</html>