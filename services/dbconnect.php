<?php
// Modifier les informations ci-dessous avec les vôtres
$servername = 'localhost';
$username = 'name';
$password = 'password';
$dbname = 'unsecuredb';
$port = 'port';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
