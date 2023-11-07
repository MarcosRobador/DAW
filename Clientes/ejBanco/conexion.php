<?php
$host = 'localhost'; 
$usuario = 'root';
$contrasena = '';
$base_datos = 'banco';

// Intenta conectar a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die('Error de conexión a la base de datos: ' . $conexion->connect_error);
} else {
    echo 'Conexión exitosa a la base de datos.';
    // Aquí puedes realizar operaciones en la base de datos
}

// Recuerda cerrar la conexión cuando hayas terminado de usarla
$conexion->close();
?>