<?php

// Verifica si la edad esta en la URL
if (isset($_GET["edad"])) {
// Obtiene la edad de la URL y la convierte en un entero
$edad = (int)$_GET["edad"];

$añoActual = date("Y");

$edadEn10 = $edad + 10;
$edadHace10 = $edad - 10;

$añoEn10 = $añoActual + 10;
$añoHace10 = $añoActual - 10;

$añoJubilacion = $añoActual + (67 - $edad);

echo "Edad actual: $edad años <p>";
echo "Edad dentro de 10 años: $edadEn10  // Será el año: $añoEn10 <p>";
echo "Edad hace de 10 años: $edadHace10  // Será el año: $añoHace10 <p>";
echo "Si te jubilas a los 67 años, será el año: $añoJubilacion ";

} else {
    // Si la edad no se ha puesto en la url
    echo "Por favor, proporciona una edad a través de la URL, http://localhost/ActividadesPHP/PHP/Ej4.php?edad=x";
}


?>
