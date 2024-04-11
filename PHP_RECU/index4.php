<?php

// Asegúrate de incluir todas las clases necesarias.
require_once 'Soporte.php';
require_once 'CintaVideo.php';
require_once 'Disco.php';
require_once 'Juego.php';
require_once 'Cliente.php';
require_once 'Videoclub.php';

// Crear un nuevo videoclub
$videoclub = new Videoclub("Blockbuster");

// Incluir algunos productos (CintaVideo, Disco, Juego)
$videoclub->incluirCintaVideo("Back to the Future", 1.99, 116);
$videoclub->incluirDvd("The Godfather", 2.99, ["English", "Italian"], "16:9");
$videoclub->incluirJuego("Super Mario Bros.", 29.99, "Nintendo", 1, 4);

// Incluir algunos socios
$videoclub->incluirSocio("John Doe");
$videoclub->incluirSocio("Jane Smith");

// Listar productos y socios
echo "Listado de productos del videoclub:<br>";
$videoclub->listarProductos();
echo "<br>Listado de socios del videoclub:<br>";
$videoclub->listarSocios();

// Alquilar un producto a un socio
$videoclub->alquilarSocioProducto(1, 1); // Suponiendo que estos números correspondan a un socio y producto existente

// Mostrar el resumen de un socio después del alquiler
$socio = $videoclub->buscarSocioPorNumero(1);
if ($socio) {
    echo "<br>Resumen de alquileres del socio:<br>";
    $socio->listarAlquileres();
}
