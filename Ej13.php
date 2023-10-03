<?php

if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
    $numFilas = (int)$_GET["filas"];
    $numColumnas = (int)$_GET["columnas"];

    echo "<table border='5'>";


    for ($fila = 1; $fila <= $numFilas; $fila++) {
        echo "<tr>";

 
        for ($columna = 1; $columna <= $numColumnas; $columna++) {
     
            // se inicializa sin valor para que cada vez que entre en el bucle no contenga ningun valor no deseado
            $valor = "";

            // condicion que se cumple si el valor de fila y columna esta en el primer y ultimo lugar
            if ($fila == 1 || $fila == $numFilas || $columna == 1 || $columna == $numColumnas) {
                
                // el punto es una concatenacion de variables
                // se rellena en caso de que de que se cumpla la condicion
                $valor = $fila . ", " . $columna;
            }

            
            echo "<td>$valor</td>";
        }

        echo "</tr>";
    }

    
    echo "</table>";
} else {
    echo "No se proporcionaron filas y columnas válidas en la URL.";
}

?>