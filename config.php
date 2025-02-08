<?php
$host = "mysql.railway.internal";
$user = "root"; // Par défaut sur WAMP/XAMPP
$pass = "VcZUcwqvzQUdMNqflmSsCfJjkJgwgcfU"; // Par défaut vide sur WAMP/XAMPP
$dbname = "railway";

// Connexion à MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
