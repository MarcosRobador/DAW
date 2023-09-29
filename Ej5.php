<?php

if (isset($_GET["dinero"])) {
    $dinero = (int)$_GET["dinero"];
    
    $descomposicion = array(500, 200, 100, 50, 20, 10, 5, 2, 1);
    
    //descomposicion: array que se va a recorrer
    //valorActual: variable que toma el valor actual cada vez que se recorre el array
    foreach ($descomposicion as $valorActual) {
        
        $cantidad = intdiv($dinero, $valorActual);
        $dinero = $dinero % $valorActual;
        
        $esBillete = $valorActual >= 5;
        $esMoneda = !$esBillete;
        
        $mensaje = $cantidad . " " . ($esBillete ? "billete" : "moneda") . ($cantidad !== 1 ? "s" : "") . " de $valorActual";
        echo "$mensaje\n";
    }
} else {
    echo "Pon la cantidad de dinero en la URL";
}

?>
