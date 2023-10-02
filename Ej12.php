<?php

if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
    $numFilas = (int)$_GET["filas"];
    $numColumnas = (int)$_GET["columnas"];

    echo "<table border='5'>";

    // Itera sobre las filas
    for ($fila = 1; $fila <= $numFilas; $fila++) {
        echo "<tr>";

        // Itera sobre las columnas
        for ($columna = 1; $columna <= $numColumnas; $columna++) {
            // Calcula el valor de la celda como las coordenadas (fila, columna)
            $valor = $fila . ", " . $columna;

            // Crea la celda y muestra el valor
            echo "<td>$valor</td>";
        }

        echo "</tr>";
    }

    // Cierra la tabla
    echo "</table>";
} else {
    echo "Establece el numero de filas y columnas en la URL";
}

?>
