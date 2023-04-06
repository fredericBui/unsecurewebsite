<?php
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createMutable('../');
$dotenv->load();

// Modifier les informations ci-dessous avec les vôtres
$servername = $_ENV["DB_SERVER_NAME"];
$username = $_ENV["DB_USER_NAME"];
$password = $_ENV["DB_PASSWORD"];
$dbname = $_ENV["DB_NAME"];
$port = $_ENV["DB_PORT"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
