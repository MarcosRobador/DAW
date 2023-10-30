<?php
$host = 'localHost'; 
$usuario = 'root'; 
$contrasena = '';
$base_datos = 'barcos'; 

// Intenta conectar a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verifica si la conexión tuvo éxito
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
echo "Conexión exitosa"; // Esto se imprimirá si la conexión fue exitosa

$conexion->close();
?>

