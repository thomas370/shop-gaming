<?php
session_start();
?>
<nav>
        <div class="nav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <?php if(!isset($_SESSION['mail_us'])) : ?>
                <a href="login.php" id="membre"><i class="fa-solid fa-user"></i></a>
            <?php else : ?>
                <a href="logout.php" id="membre">Déconnexion</i></a>
            <?php endif; ?>
            <a href="panier.php" id="membre"><i class="fa-solid fa-basket-shopping"></i></a>
            <!--compter les items du panier -->
            <a href="javascript:void(0);" class="icon" onclick="burger()"> <!-- appel de la fonction burger -->
              <i class="fa fa-bars"></i>
            </a>
          </div>
</nav>

<!-- script menu déroulant burger -->
<script>
function burger() {
    var x = document.getElementById("myTopnav");
        if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}
</script>