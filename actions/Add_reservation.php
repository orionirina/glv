<?php
include('../PDO/connexionbdd.php'); // Assure-toi que $bdd est bien défini dedans (une instance PDO)

if (
    isset($_POST['nom']) && isset($_POST['contact']) && isset($_POST['DateDebut']) && isset($_POST['DateFin']) && isset($_POST['HeureDebut']) && isset($_POST['HeureFin'])
){
    // Récupération des données
    $nom = $_POST['nom'];
    $contact = $_POST['contact'];
    $nom_voiture = "BMW"; // temporairement fixe
    $DateDebut = $_POST['DateDebut'];
    $DateFin = $_POST['DateFin'];
    $HeureDebut = $_POST['HeureDebut'];
    $HeureFin = $_POST['HeureFin'];

    try {
        // Préparer la requête
        $requete = $bdd->prepare("INSERT INTO reservations VALUES (0, :nom, :contact, :nom_voiture, :DateDebut, :DateFin, :HeureDebut, :HeureFin)");

        // Exécuter avec les paramètres
        $requete->execute(
            array(
            "nom" => $nom,
            "contact" => $contact,
            "nom_voiture" => $nom_voiture,
            "DateDebut" => $DateDebut,
            "DateFin" => $DateFin,
            "HeureDebut" => $HeureDebut,
            "HeureFin" => $HeureFin
                )
        );

        // Rediriger en cas de succès
        header("Location: ../pages/choix.php");
        exit;

    } catch (PDOException $e) {
        // Affiche une erreur claire s'il y a un problème avec la BDD
        echo "<h3>Erreur lors de l'insertion : " . $e->getMessage() . "</h3>";
    }

} else {
    echo "<h3>Erreur : Données incomplètes</h3>";
    print_r($_POST); // pour t’aider à voir ce qui manque
}
?>



