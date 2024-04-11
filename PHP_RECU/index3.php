<?php
require_once 'Soporte.php';
require_once 'Cliente.php';

$cliente = new Cliente("Juan", 123);

// Agregar soportes alquilados por el cliente
$soporte1 = new Soporte("Soporte 1", 1, 2);
$soporte2 = new Soporte("Soporte 2", 2, 3);
$soporte3 = new Soporte("Soporte 3", 3, 4);

$cliente->alquilar($soporte1);
$cliente->alquilar($soporte2);
$cliente->alquilar($soporte3);

// Mostrar un resumen de los alquileres del cliente
$cliente->muestraResumen();

// Listar los alquileres del cliente
$cliente->listarAlquileres();

// Devolver un soporte alquilado
$cliente->devolver(2);

// Listar los alquileres actualizados después de devolver un soporte
$cliente->listarAlquileres();
