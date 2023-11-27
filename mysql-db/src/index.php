<?php
$host = 'db'; // El nombre del servicio db en docker-compose.yml
$db   = 'banco';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Conexión exitosa a la base de datos MySQL!";
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}
?>
