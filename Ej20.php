<?php

function mayusMinus($cadena) {
    // inicializa una cadena vacia para almacenar el resultado
    $cadena = '';
    // empezar en mayuscula 
    $mayuscula = true; 

    // recorre cada caracter de la cadena original
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i]; // obtiene el caracter actual

        // alterna entre mayusculas y minusculas
        if ($mayuscula) {
            $nuevaCadena .= strtoupper($caracter); // convierte el caracter a mayusculas y lo agrega a la nueva cadena
        } else {
            $nuevaCadena .= strtolower($caracter); // convierte el caracter a minusculas y lo agrega a la nueva cadena
        }

        // invierte el valor de $mayuscula
        $mayuscula = !$mayuscula;
    }
    //cadena transformada
    return $nuevaCadena;
}

// cadena de ejemplo
$cadenaOriginal = "hola mundo"; 
// llama a la funcion para alternar mayusculas y minusculas
$cadenaTransformada = mayusMinus($cadenaOriginal); 
echo $cadenaTransformada; 

?>