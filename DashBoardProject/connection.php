<?php
// Connexion à la base de données (à remplacer par vos informations)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stagesite";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
