<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar</title>
</head>
<body>

<?php

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
   
    echo '<table border="5">';
    
    // el encabezado de la tabla (thead)
    echo '<thead>';
    echo '<tr>';
    echo '<th>Tabla</th>';
    echo '<th>*</th>';
    echo '<th>Resultado</th>';
    echo '</tr>';
    echo '</thead>';
    
    // crea el cuerpo de la tabla (tbody)
    echo '<tbody>';
    
    // genera las filas de la tabla de multiplicar
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
        echo '<td>' . $numero . '</td>';
        echo '<td>' . $i . '</td>';
        echo '<td>' . ($numero * $i) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    
 
    echo '</table>';
} else {
    echo 'Pon el número de la tabla que quieres en la URL.';
}
?>

</body>
</html>
