<?php
   include('../PDO/connexionbdd.php');
    
    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp'])){

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $requete = $bdd->prepare("INSERT INTO user VALUES (0,:name, :email, :password)");
        $requete->execute(
        array(
            "nom" => $nom,
            "email" => $email,
            "password" => $mdp,
        )
        );
        header("Location: ../pages/choix.php");
    }
?>
