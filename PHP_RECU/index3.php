<?php

require_once 'Cliente.php'; 
require_once 'Soporte.php';

$soporte1 = new Soporte("Película 1", 1, 10.99);
$soporte2 = new Soporte("Libro 1", 2, 19.99);
$soporte3 = new Soporte("CD 1", 3, 9.99);

//Objeto Cliente
$cliente = new Cliente("Juan", 123);

// Alquiler de algunos soportes
$cliente->alquilar($soporte1);
$cliente->alquilar($soporte2);
$cliente->alquilar($soporte3);

// Muestra resumen de alquileres
echo "Resumen de alquileres antes de devolución:<br>";
$cliente->listarAlquileres();
echo "<br>";

// Devuelve un soporte
echo "Devolviendo el segundo soporte:<br>";
$cliente->devolver(1);
echo "<br>";

// Muestra resumen de alquileres actualizado
echo "Resumen de alquileres después de devolución:<br>";
$cliente->listarAlquileres();
echo "<br>";

?>
