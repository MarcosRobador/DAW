<?php
require_once 'Soporte.php';

$soporte = new Soporte("Soporte1", 1, 19.99);
echo $soporte->muestraResumen();

require_once 'Disco.php';

$disco = new Disco("Casablanca", 2, 14.99, ["Español", "Inglés", "Francés"], "16:9");
echo $disco->muestraResumen();

require_once 'Juego.php';

$juego = new Juego("Super Mario Odyssey", 3, 59.99, "Nintendo Switch", 1, 2);
echo $juego->muestraResumen();