<?php
   include('../PDO/connexionbdd.php');
    
    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp'])){

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $requete = $bdd->prepare("INSERT INTO utilisateurs VALUES (0,:nom,:email,:mdp)");
        $requete->execute(
        array(
            "nom"=>$nom,
            "email"=>$email,
            "mdp"=>$mdp,
        )
        );
        header("Location: ../pages/choix.php");
    }
?>
