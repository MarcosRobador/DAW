<?php
require_once 'Soporte.php';
require_once 'Disco.php';

// Test
echo "Soporte.php <br><br>";
$soporte = new Soporte("Película", 123, 10);
$soporte->muestraResumen();
echo "Precio con IVA: " . $soporte->getPrecioConIva();

echo "<br><br>Disco.php<br><br>";
$disco = new Disco("Película en disco", 456, 20.99, "Español, Inglés", "16:9");
$disco->muestraResumen();