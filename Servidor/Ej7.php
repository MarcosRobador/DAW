<?php

$a = 8;
$b = 20;
$c = 8;

// calcula el discriminante
// ** 2: elevado a dos
$discriminante = $b ** 2  - 4 * $a * $c;

if ($discriminante > 0) {
    //  soluciones distintas
    $sol1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $sol2 = (-$b - sqrt($discriminante)) / (2 * $a);

    echo "Dos soluciones distintas: x1 = $sol1 y x2 = $sol2";

} else {
    
    echo "No hay soluciones reales";
}

?>
