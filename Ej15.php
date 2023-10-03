<?php

// array vacio
$elementos = [];
// bucle el cual llega a 100 y genera un numero aleatorio entre 0 y 1 generando las F y las M
for ($i = 0; $i < 100; $i++) {
    $elementos[] = (rand(0, 1) == 0) ? 'M' : 'F';
}

// array_reduce: cuenta las M Y F
$resultado = array_reduce($elementos, function($contador, $valorAct) {
    $contador[$valorAct]++;
    return $contador;
}, ['M' => 0, 'F' => 0]);


echo "Resultado:\n";
echo "M: " . $resultado['M'] . "\n";
echo "F: " . $resultado['F'] . "\n";

?>
