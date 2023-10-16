<?php

if (isset($_GET["euros"])) {
    $euros = (int)$_GET["euros"];
// Cantidad de euros a convertir


// Factor de conversión de euros a pesetas (1 euro = 166.386 pesetas)
$factorConversion = 166.386;

// Realizar la conversión
$pesetas = $euros * $factorConversion;

// Mostrar el resultado
echo "$euros euros son equivalentes a $pesetas pesetas.";

} else {
    echo "Pon la cantidad de euros en la url";
}
?>
