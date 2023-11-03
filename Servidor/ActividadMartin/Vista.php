<?php
include 'Conexion.php'; // Incluye el archivo de conexión
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mi Sitio Web</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Avenir">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/LogoBarco.png" alt="Mi Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Guadalcanal</a></li>
                <li><a href="#">Acorazados y cruceros</a></li>
                <li><a href="#">Batallas con 3 barcos</a></li>
                <li><a href="#">Max cañones</a></li>
                <li><a href="#">Kongo</a></li>

            </ul>
        </nav>
    </header>


<?php
if ($resultBarcos->num_rows > 0) {
    // Comprueba si hay resultados de la consulta (barcos en la Batalla de Guadalcanal)
    echo "<h2>Barcos en la Batalla de Guadalcanal</h2>"; 
    echo "<table border='5'>"; 
    echo "<tr><th>Nombre del Barco</th><th>Desplazamiento</th><th>Cantidad de Cañones</th></tr>"; 
    while ($row = $resultBarcos->fetch_assoc()) {
        // Itera a través de los resultados y muestra cada barco en una fila de la tabla
        echo "<tr>"; 
        echo "<td>" . $row["NOMBRE_BARCO"] . "</td>"; 
        echo "<td>" . $row["DESPLAZAMIENTO"] . "</td>"; 
        echo "<td>" . $row["NRO_CANIONES"] . "</td>"; 
        echo "</tr>";
    }
    echo "</table>"; 
} else {
    // Si no hay resultados.
    echo "<h2>No se encontraron barcos en la batalla de Guadalcanal.</h2>";
}



if ($resultPaises->num_rows > 0) {
    echo "<h2>Países con Acorazados y Cruceros</h2>";
    echo "<table border='5'>";
    echo "<tr><th>País</th></tr>";
    while ($row = $resultPaises->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["PAIS"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h2>No se encontraron países con acorazados y cruceros.</h2>";
}


if ($resultBatallas->num_rows > 0) {
    echo "<h2>Batallas con al menos tres barcos del mismo país:</h2>";
    echo "<table border='5'>";
    echo "<tr><th>Nombre de la Batalla</th><th>País</th><th>Cantidad de Barcos</th></tr>";
    while ($row = $resultBatallas->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["NOMBRE_BATALLA"] . "</td>";
        echo "<td>" . $row["PAIS"] . "</td>";
        echo "<td>" . $row["CantidadDeBarcos"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h2>No se encontraron batallas con al menos tres barcos del mismo país.</h2>";
}




if ($resultPaisesMaxCaniones->num_rows > 0) {
    echo "<h2>Países con el Mayor Número de Cañones</h2>";
    echo "<table border='5'>";
    echo "<tr><th>País</th><th>Número Máximo de Cañones</th></tr>";
    while ($row = $resultPaisesMaxCaniones->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["PAIS"] . "</td>";
        echo "<td>" . $row["MaxCaniones"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h2>No se encontraron países con el mayor número de cañones.</h2>";
}




if ($resultBatallasConClaseKongo->num_rows > 0) {
    echo "<h2>Batallas con Barcos de la Clase 'Kongo'</h2>";
    echo "<table border='5'>"; // Usamos "table" en lugar de "ul" para una tabla
    echo "<tr><th>Nombre de la Batalla</th></tr>"; // Encabezado de la tabla
    while ($row = $resultBatallasConClaseKongo->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["NOMBRE_BATALLA"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h2>No se encontraron batallas con barcos de la clase 'Kongo'.</h2>";
}


// Cerrar la conexión a la base de datos
$conexion->close();
?>

</body>
</html>
