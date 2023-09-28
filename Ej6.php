<?php

if (isset($_GET["edad"])) {
    $edad = (int)$_GET["edad"];

    if ($edad < 3) {
        $ciclo = "bebe";
    } elseif ($edad >= 3 && $edad <= 12) {
        $ciclo = "niño";
    } elseif ($edad >= 13 && $edad <= 17) {
        $ciclo = "adolescente";
    } elseif ($edad >= 18 && $edad <= 66) {
        $ciclo = "adulto";
    } else {
        $ciclo = "jubilado";
    }

    echo "Eres un $ciclo";
} else {
    echo "Pon tu edad en la url";
}
