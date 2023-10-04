<?php

if (isset($_GET["cantidad"])) {
    $dinero = (int)$_GET["cantidad"];
    
    $descomposicion = array(500, 200, 100, 50, 20, 10, 5, 2, 1);
    
    //descomposicion: array que se va a recorrer
    //valorActual: variable que toma el valor actual cada vez que se recorre el array
    foreach ($descomposicion as $valorActual) {
        
        // intdiv: division de dos numeros que da como resultado un numero entero
        $cantidad = intdiv($dinero, $valorActual);
        // se utiliza para actualizar la variable dinero de modo que si es 20 te ponga un billete de 20 y no te siga poniendo 2 de 10, 4 de 5...
        $dinero = $dinero % $valorActual;
        
        // valorActual se compone de monedas si es menor a 5
        $billete = $valorActual >= 5;
        $moneda = !$esBillete;
        
        $mensaje = $cantidad . " " . ($billete ? "billete" : "moneda") . ($cantidad !== 1 ? "s" : "") . " de $valorActual";
        echo "<p>$mensaje</p>";

    }
} else {
    echo "Pon la cantidad de dinero en la URL";
}

?>
