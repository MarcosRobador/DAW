<?php

// Coeficientes de la ecuacion 
$a = 2;
$b = 5;
$c = 2;

// Calcula el discriminante
$discriminante = $b * $b - 4 * $a * $c;

if ($discriminante > 0) {
    //  Soluciones distintas
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

    echo "Dos soluciones distintas: x1 = $x1 y x2 = $x2";

} elseif ($discriminante == 0) {
    // Una solución real (solucion doble)
    $x = -$b / (2 * $a);

    echo "Una solución real (solución doble): x = $x";

} else {
    
    echo "No hay soluciones reales";
}

?>
