<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
<h2 class="mt-4">Ajouter une Voiture</h2>
<form action="ajouter_voiture.php" method="POST" class="mb-4">
    <div class="mb-3">
        <label class="form-label">Marque :</label>
        <input type="text" name="marque" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Modèle :</label>
        <input type="text" name="modele" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Année :</label>
        <input type="number" name="annee" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Couleur :</label>
        <input type="text" name="couleur" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Prix (€) :</label>
        <input type="number" step="0.01" name="prix" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

</body>
</html>