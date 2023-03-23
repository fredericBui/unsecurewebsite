<?php
// Modifier les informations ci-dessous avec les vôtres
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'unsecuredb';
$port = '3308';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
