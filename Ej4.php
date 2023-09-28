<?php

// Verifica si la edad esta en la URL
if (isset($_GET['edad'])) {
    // Obtiene la edad de la URL y la convierte en un entero
    $edad = (int)$_GET['edad'];

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

} else {
    // Si la edad no se ha puesto en la url
    echo "Por favor, proporciona una edad a través de la URL, http://localhost/ActividadesPHP/PHP/Ej4.php?edad=x";
}


?>
