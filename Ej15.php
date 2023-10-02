<?php

$elementos = [];
for ($i = 0; $i < 100; $i++) {
    $elementos[] = (rand(0, 1) == 0) ? 'M' : 'F';
}


$resultado = array_reduce($elementos, function($carry, $item) {
    $carry[$item]++;
    return $carry;
}, ['M' => 0, 'F' => 0]);


echo "Resultado:\n";
echo "M: " . $resultado['M'] . "\n";
echo "F: " . $resultado['F'] . "\n";

?>
