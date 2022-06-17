<?php
require "connexion.php"; //appelle au fichier de la connection à la BDD

if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['mail']) && !empty($_POST['mail'])){//si le pseudo et le mot de passe sont remplis
    
    // récupérer les infos du form champs par champ 
    $mail = htmlspecialchars($_POST['mail']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = htmlspecialchars($_POST['password']);
    
    // recupérer via la BDD 
    
    $query = $connexion->prepare("SELECT `pseudo_us`, `password_us`, `mail_us` FROM `user` WHERE `pseudo_us` = ? ");
    $query -> execute([$pseudo]);
    
    $clientBDD = $query -> fetch();
    
    // je test les deux infos (form et de la BDD)
    
    if($clientBDD)
    {
        // tester le mot de passe 
        if($mdp == $clientBDD["password_us"])
        {
            // je crée une session
            session_start();
            $_SESSION['pseudo_us'] = $clientBDD["pseudo_us"];
            $_SESSION['password_us'] = $clientBDD["password_us"];
            $_SESSION['mail_us'] = $clientBDD["mail_us"];
            header("Location:../../index.php");
        }
        else
        {
            echo "Mauvais mot de passe";
        }
    }
    else
    {
        echo " le client n'existe pas";
    }
    
}
