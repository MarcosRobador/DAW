<?php
$host = 'localhost'; 
$usuario = 'root';
$contrasena = '';
$base_datos = 'barcos';

// Intenta conectar a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);


// Consulta SQL para obtener los datos de los barcos en la batalla de Guadalcanal
$queryBarcos = "SELECT B.NOMBRE_BARCO, C.DESPLAZAMIENTO, C.NRO_CANIONES
          FROM BARCOS B
          JOIN BARCO_CLASE BC ON B.NOMBRE_BARCO = BC.NOMBRE_BARCO
          JOIN CLASES C ON BC.CLASE = C.CLASE
          JOIN RESULTADOS R ON B.NOMBRE_BARCO = R.NOMBRE_BARCO
          JOIN BATALLAS BA ON R.NOMBRE_BATALLA = BA.NOMBRE_BATALLA
          WHERE BA.NOMBRE_BATALLA = 'Guadalcanal'";

$resultBarcos = $conexion->query($queryBarcos);

// Consulta SQL para encontrar países con acorazados y cruceros
$queryPaises = "SELECT DISTINCT C.PAIS
          FROM CLASES C
          INNER JOIN BARCO_CLASE BC ON C.CLASE = BC.CLASE
          WHERE C.TIPO IN ('ACORAZADO', 'CRUCERO')
          GROUP BY C.PAIS
          HAVING COUNT(DISTINCT C.TIPO) = 2";

$resultPaises = $conexion->query($queryPaises);

// Consulta SQL para encontrar batallas con al menos tres barcos del mismo país
$queryBatallas = "SELECT BA.NOMBRE_BATALLA, C.PAIS, COUNT(*) AS CantidadDeBarcos
                 FROM BARCO_CLASE BC
                 JOIN CLASES C ON BC.CLASE = C.CLASE
                 JOIN RESULTADOS R ON BC.NOMBRE_BARCO = R.NOMBRE_BARCO
                 JOIN BATALLAS BA ON R.NOMBRE_BATALLA = BA.NOMBRE_BATALLA
                 GROUP BY BA.NOMBRE_BATALLA, C.PAIS
                 HAVING CantidadDeBarcos >= 3";

$resultBatallas = $conexion->query($queryBatallas);


// Consulta SQL para encontrar los países con el mayor número de cañones
$queryPaisesMaxCaniones = "SELECT C.PAIS, MAX(C.NRO_CANIONES) AS MaxCaniones
          FROM CLASES C
          GROUP BY C.PAIS";

$resultPaisesMaxCaniones = $conexion->query($queryPaisesMaxCaniones);






// Consulta SQL para encontrar las batallas en las que participaron barcos de la clase "Kongo"
$queryBatallasConClaseKongo = "SELECT DISTINCT BA.NOMBRE_BATALLA
          FROM BATALLAS BA
          JOIN RESULTADOS R ON BA.NOMBRE_BATALLA = R.NOMBRE_BATALLA
          JOIN BARCOS B ON R.NOMBRE_BARCO = B.NOMBRE_BARCO
          JOIN BARCO_CLASE BC ON B.NOMBRE_BARCO = BC.NOMBRE_BARCO
          WHERE BC.CLASE = 'KONGO'";

$resultBatallasConClaseKongo = $conexion->query($queryBatallasConClaseKongo);





// Cerrar la conexión a la base de datos .
$conexion->close();
?>
