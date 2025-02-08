<?php
include 'config.php'; // Inclure la connexion à la base

$sql = "SELECT * FROM voitures";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Auto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container mt-5">

    <h1 class="text-center">Liste des Voitures <a href="formu_ajout.php" class="ajoutVoiture">ajouter voiture</a></h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>Couleur</th>
                <th>Prix (€)</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['marque'] ?></td>
                <td><?= $row['modele'] ?></td>
                <td><?= $row['annee'] ?></td>
                <td><?= $row['couleur'] ?></td>
                <td><?= $row['prix'] ?> €</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close(); // Fermer la connexion à la base
?>
