<!DOCTYPE html>
<html>
<head>
    <title>Horario de Clases</title>
</head>
<body>
    <h1>Horario</h1>
    
    <table border="5">
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <?php
        // Define un arreglo para el horario
        $horario = array(
            "8:00 AM - 9:00 AM" => array("Servidor", "Empresa", "Clientes", "Interfaces", "Despliegue"),
            "9:00 AM - 10:00 AM" => array("Servidor", "Empresa", "Clientes", "Interfaces", "Despliegue"),
            "10:00 AM - 11:00 AM" => array("Recreo", "Recreo", "Recreo", "Recreo", "Recreo"),
            "11:00 AM - 12:00 PM" => array("Servidor", "Empresa", "Clientes", "Interfaces", "Despliegue"),
            "12:00 PM - 1:00 PM" => array("Servidor", "Empresa", "Clientes", "Interfaces", "Despliegue")
        );

        // Itera sobre el arreglo y crea filas de la tabla
        foreach ($horario as $hora => $dias) {
            echo "<tr>";
            echo "<td>$hora</td>";
            foreach ($dias as $clase) {
                echo "<td>$clase</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
