<?php
$host = "localhost";
$user = "root"; // Par défaut sur WAMP/XAMPP
$pass = ""; // Par défaut vide sur WAMP/XAMPP
$dbname = "garage";

// Connexion à MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
