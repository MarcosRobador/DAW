<?php

$edad = 20;

$anyoActual = date("Y");

$edadEn10 = $edad + 10;
$edadHace10 = $edad - 10;

$anyoEn10 = $anyoActual + 10;
$anyoHace10 = $anyoActual - 10;

$anyoJubilacion = $anyoActual + (67 - $edad);

echo "Edad actual: $edad años <p>";
echo "Edad dentro de 10 años: $edadEn10  // Será el año: $anyoEn10 <p>";
echo "Edad hace de 10 años: $edadHace10  // Será el año: $anyoHace10 <p>";
echo "Si te jubilas a los 67 años, será el año: $anyoJubilacion ";
?>
