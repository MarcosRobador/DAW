<?php
require_once 'Soporte.php';
require_once 'Juego.php';

$juego = new Juego("Nombre del juego", "123", 49.99, "PlayStation 5", 1, 1);
echo "<h1>Resumen del juego:</h1>";
$juego->muestraResumen();

