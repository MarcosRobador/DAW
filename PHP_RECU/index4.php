<?php

require_once 'Soporte.php';
require_once 'CintaVideo.php';
require_once 'Disco.php';
require_once 'Juego.php';
require_once 'Cliente.php';
require_once 'Videoclub.php';

// Crear un nuevo videoclub
$videoclub = new Videoclub("Blockbuster");

// Incluir algunos productos
$videoclub->incluirCintaVideo("LOL", 1.99, 116);
$videoclub->incluirDvd("Cars", 2.99, ["English", "Italian"], "16:9");
$videoclub->incluirJuego("Super Mario Bros.", 29.99, "Nintendo", 1, 4);

// Incluir algunos socios
$videoclub->incluirSocio("Pedro"); // Supongamos que Pedro puede tener hasta 2 alquileres concurrentes.
$videoclub->incluirSocio("Jorge");

// Listar productos y socios antes de los alquileres
echo "Listado de productos del videoclub antes de alquileres:<br>";
$videoclub->listarProductos();
echo "<br><br>Listado de socios del videoclub antes de alquileres:<br>";
$videoclub->listarSocios();

// Alquilar un producto a un socio
echo "<br><br>Intentando alquilar 'Cars' a Pedro:<br>";
$videoclub->alquilarSocioProducto(1, 2); // Asumiendo que Pedro es el socio 1 y 'Cars' es el producto 2

// Alquilar otro producto
echo "<br>Intentando alquilar 'Super Mario Bros.' a Pedro:<br>";
$videoclub->alquilarSocioProducto(1, 3); // Asumiendo que 'Super Mario Bros.' es el producto 3

// Intentar alquilar más allá del límite
echo "<br>Intentando alquilar 'LOL' a Pedro:<br>";
$videoclub->alquilarSocioProducto(1, 1); // Asumiendo que 'LOL' es el producto 1

// Devolver un producto
echo "Devolviendo 'Cars' por Pedro:";
$socio = $videoclub->buscarSocioPorNumero(1);
if ($socio) {
    $soporte = $videoclub->buscarProductoPorNumero(2); // Buscando 'Cars'
    if ($soporte) {
        $socio->devolver($soporte);
    }
}

