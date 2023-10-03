<?php
// array vacio, bucle que genera 33 numeros de 0 a 100 y los añade en el array
$num = [];
for ($i = 0; $i < 33; $i++) {
    $num[] = rand(0, 100);
}

// max y min lo que hacen es buscar el valor maximo y minimo del array
$mayor = max($num);
$menor = min($num);

// array_sum: suma de todos los elementos del arry
$suma = array_sum($num);

//count: numero de elementos en el array para poder hacer la media
$media = $suma / count($num);

// implode: mmuestra el array aleatorio encadenado
echo "Array aleatorio: " . implode(", ", $num) . "\n";
echo "El mayor elemento es: " . $mayor . "\n";
echo "El menor elemento es: " . $menor . "\n";
echo "La media de los elementos es: " . $media . "\n";

?>