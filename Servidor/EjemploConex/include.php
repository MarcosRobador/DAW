<?php
// Conexión a la base de datos (asegúrate de haber configurado la conexión en un archivo separado)
include('conexion.php');

// Consulta SQL para obtener al alumno más joven
$sql = "SELECT * FROM persona WHERE tipo = 'alumno' ORDER BY fecha_nacimiento DESC LIMIT 1";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Crear una tabla HTML para mostrar los datos
    echo '<table border="1">
            <tr>
                <th>ID</th>
                <th>NIF</th>
                <th>Nombre</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
                <th>Tipo</th>
            </tr>';

    // Obtener los datos del alumno más joven y mostrarlos en la tabla
    $fila = $resultado->fetch_assoc();
    echo '<tr>
            <td>' . $fila['id'] . '</td>
            <td>' . $fila['nif'] . '</td>
            <td>' . $fila['nombre'] . '</td>
            <td>' . $fila['apellido1'] . '</td>
            <td>' . $fila['apellido2'] . '</td>
            <td>' . $fila['ciudad'] . '</td>
            <td>' . $fila['direccion'] . '</td>
            <td>' . $fila['telefono'] . '</td>
            <td>' . $fila['fecha_nacimiento'] . '</td>
            <td>' . $fila['sexo'] . '</td>
            <td>' . $fila['tipo'] . '</td>
          </tr>';

    echo '</table>';
} else {
    echo 'No se encontraron alumnos.';
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
