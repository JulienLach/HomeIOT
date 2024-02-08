<?php

// Database configuration
$host = 'localhost';
$dbName = 'homeiot';
$username = 'julien';
$password = 'mysqlpassword';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Your code here...

} catch (PDOException $e) {
    // Handle database connection errors
    echo "Connection échouée: " . $e->getMessage();
}

echo "Connexion à la base de données réussie";

?>