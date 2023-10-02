<?php

if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
    $numFilas = (int)$_GET["filas"];
    $numColumnas = (int)$_GET["columnas"];

    echo "<table border='1'>";


    for ($fila = 1; $fila <= $numFilas; $fila++) {
        echo "<tr>";

 
        for ($columna = 1; $columna <= $numColumnas; $columna++) {
     
            $valor = "";

       
            if ($fila == 1 || $fila == $numFilas || $columna == 1 || $columna == $numColumnas) {
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