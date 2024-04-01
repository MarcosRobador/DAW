<?php
require_once 'Soporte.php';
require_once 'Disco.php';
require_once 'Juego.php';


// Test
echo "Soporte.php <br><br>";
$soporte = new Soporte("Película", 123, 10);
$soporte->muestraResumen();
echo "Precio con IVA: " . $soporte->getPrecioConIva();

echo "<br><br>Disco.php<br><br>";
$disco = new Disco("Película en disco", 456, "Español, Inglés", "16:9");
$disco->muestraResumen();

echo "<br><br>Juego.php<br><br>";
$juego = new Juego("The Legend of Zelda", "J123", 50, "Nintendo Switch", 1, 1);
$juego->muestraResumen();