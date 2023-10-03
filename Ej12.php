<?php

if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
    $numFilas = (int)$_GET["filas"];
    $numColumnas = (int)$_GET["columnas"];

    echo "<table border='5'>";

    // El tamaño de la tabla dependera del numero de filas y columnas 
    for ($fila = 1; $fila <= $numFilas; $fila++) {
        echo "<tr>";

        // Columnas
        for ($columna = 1; $columna <= $numColumnas; $columna++) {
            
            // Muestra las filas y columnas en el interior de la celda
            $valor = $fila . ", " . $columna;

            // Crea la celda y muestra el valor
            echo "<td>$valor</td>";
        }

        echo "</tr>";
    }   

    echo "</table>";
    
} else {
    echo "Establece el numero de filas y columnas en la URL";
}

?>