<?php
require_once 'Soporte.php';
require_once 'Cliente.php';

//Cliente
$cliente = new Cliente("Marcos", 1);

// Creamos algunos soportes
$soporte1 = new Soporte("Soporte 1", 101, 19.99);
$soporte2 = new Soporte("Soporte 2", 102, 29.99);

// Intentamos alquilar un soporte
echo "Intentando alquilar Soporte 1...\n";
$resultado = $cliente->alquilar($soporte1);
echo "Resultado: " . ($resultado ? "Éxito" : "Fallo") . "\n\n";

// Intentamos alquilar el mismo soporte de nuevo
echo "Intentando alquilar Soporte 1 de nuevo...\n";
$resultado = $cliente->alquilar($soporte1);
echo "Resultado: " . ($resultado ? "Éxito" : "Fallo") . "\n\n";

// Alquilamos un segundo soporte
echo "Intentando alquilar Soporte 2...\n";
$resultado = $cliente->alquilar($soporte2);
echo "Resultado: " . ($resultado ? "Éxito" : "Fallo") . "\n\n";

// Listamos los alquileres actuales del cliente
echo "Listado de alquileres:\n";
$cliente->listarAlquileres();
echo "\n";

// Devolvemos un soporte
echo "Devolviendo Soporte 1...\n";
$resultado = $cliente->devolver($soporte1->getNumero());
echo "Resultado: " . ($resultado ? "Éxito" : "Fallo") . "\n\n";

// Listamos los alquileres de nuevo
echo "Listado de alquileres después de la devolución:\n";
$cliente->listarAlquileres();
echo "\n";

// Muestra el resumen del cliente
echo "Mostrando el resumen del cliente:\n";
$cliente->muestraResumen();