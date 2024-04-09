<?php
require_once 'Cliente.php'; 
require_once 'Soporte.php'; 

// Crear instancias de Cliente
$cliente1 = new Cliente("Marcos", 1);
$cliente2 = new Cliente("Lola", 2);

// Crear instancias de Soporte
$soporte1 = new Soporte("Soporte1", 1, 10.0);
$soporte2 = new Soporte("Soporte2", 2, 15.0);
$soporte3 = new Soporte("Soporte3", 3, 20.0);

// Alquilar soportes
$cliente1->alquilar($soporte1);
$cliente1->alquilar($soporte2);
$cliente2->alquilar($soporte3);

// Listar alquileres antes de devolver
echo "Alquileres antes de devolver:\n";
$cliente1->listarAlquileres();

// Intentar devolver un soporte que está alquilado
echo "\nIntentando devolver el soporte 2:\n";
$resultado = $cliente1->devolver(2);

// Verificar si la devolución fue exitosa
if ($resultado) {
    echo "\nLa devolución fue exitosa.\n";
} else {
    echo "\nLa devolución no fue exitosa.\n";
}

// Listar alquileres después de devolver
echo "\nAlquileres después de devolver:\n";
$cliente1->listarAlquileres();


