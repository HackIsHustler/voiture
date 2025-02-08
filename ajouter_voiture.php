<?php
include 'config.php'; // Connexion à la base

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];

    // Requête SQL pour insérer une voiture
    $sql = "INSERT INTO voitures (marque, modele, annee, couleur, prix) 
            VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisd", $marque, $modele, $annee, $couleur, $prix);

    if ($stmt->execute()) {
        echo "<script>alert('Voiture ajoutée avec succès !'); window.location.href='index.php';</script>";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
