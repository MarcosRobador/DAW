<?php
$host = 'localHost'; // Cambia esto al nombre del servidor de tu base de datos
$usuario = 'root'; // Cambia esto a tu nombre de usuario de la base de datos
$contrasena = ''; // Cambia esto a tu contraseña de la base de datos
$base_datos = 'base'; // Cambia esto al nombre de tu base de datos

// Intenta conectar a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verifica si la conexión tuvo éxito
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
echo "Conexión exitosa"; // Esto se imprimirá si la conexión fue exitosa

// Consulta SQL para obtener al alumno más joven
/*$sql = "SELECT * FROM persona WHERE tipo = 'alumno' ORDER BY fecha_nacimiento ASC LIMIT 1";

$resultado = $conexion->query($sql);

if ($resultado) {
    if ($resultado->num_rows > 0) {
        // Mostrar los datos del alumno más joven

		echo "<table border='1'>";
        echo "<tr><th>ID</th><th>NIF</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Ciudad</th><th>Dirección</th><th>Teléfono</th><th>Fecha de Nacimiento</th><th>Sexo</th><th>Tipo</th></tr>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["nif"] . "</td>";
            echo "<td>" . $fila["nombre"] . "</td>";
            echo "<td>" . $fila["apellido1"] . "</td>";
            echo "<td>" . $fila["apellido2"] . "</td>";
            echo "<td>" . $fila["ciudad"] . "</td>";
            echo "<td>" . $fila["direccion"] . "</td>";
            echo "<td>" . $fila["telefono"] . "</td>";
            echo "<td>" . $fila["fecha_nacimiento"] . "</td>";
            echo "<td>" . $fila["sexo"] . "</td>";
            echo "<td>" . $fila["tipo"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron alumnos en la base de datos.";
    }
} else {
    echo "Error en la consulta: " . $conexion->error;
}


// Consulta SQL para obtener profesores sin departamento
$sql2 = "SELECT p.id, p.nombre, p.apellido1, p.apellido2
        FROM persona p
        LEFT JOIN profesor pr ON p.id = pr.id_profesor
        LEFT JOIN departamento d ON pr.id_departamento = d.id
        WHERE p.tipo = 'profesor' AND d.id IS NULL";

$resultado2 = $conexion->query($sql2);

if ($resultado2) {
    if ($resultado2->num_rows > 0) {
        // Mostrar los profesores que no están asociados a un departamento

        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th></tr>";
        while ($fila = $resultado2->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["nombre"] . "</td>";
            echo "<td>" . $fila["apellido1"] . "</td>";
            echo "<td>" . $fila["apellido2"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron profesores sin departamento asociado.";
    }
} else {
    echo "Error en la consulta: " . $conexion->error;
}
*/
$conexion->close();
?>

