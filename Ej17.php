<?php
// funcion para contar la cantidad de digitos en un numero
function digitos(int $num): int {
    return strlen((string)$num);
}

// funcion para obtener un digito en una posicion especifica, en este caso empezando por la izquierda
function digito2(int $num, int $pos): int {
    $numStr = (string)$num;
    if ($pos >= 0 && $pos < strlen($numStr)) {
        return (int)$numStr[$pos];
    } else {
        // en el caso de que estuviera fuera de rango, retornaria -1
        return -1; 
    }
}

// funcion para quitar una cantidad de digitos por detras de un numero
function quitaDetras(int $num, int $cant): int {
    return (int)substr((string)$num, 0, -$cant);
}

// funcion para quitar una cantidad de digitos por delante de un numero
function quitaDelante(int $num, int $cant): int {
    return (int)substr((string)$num, $cant);
}


$num = 12345;
echo "Número: $num\n";
echo "Cantidad de dígitos: " . digitos($num) . "\n";
echo "Dígito en la posición 2 : " . digito2($num, 2) . "\n";
echo "Quitar 2 dígitos por detrás: " . quitaDetras($num, 2) . "\n";
echo "Quitar 2 dígitos por delante: " . quitaDelante($num, 2) . "\n";
?>
