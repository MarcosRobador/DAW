<?php
// Comprueba si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $email = $_POST["email"];
    $nacimiento = $_POST["nacimiento"];
    $movil = $_POST["movil"];

    // Muestra los datos en una tabla
    echo "<table border='5'>";
    echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
    echo "<tr><td>Primer Apellido</td><td>$apellido1</td></tr>";
    echo "<tr><td>Segundo Apellido</td><td>$apellido2</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Año de Nacimiento</td><td>$nacimiento</td></tr>";
    echo "<tr><td>Móvil</td><td>$movil</td></tr>";
    echo "</table>";
} else {
    echo "Los datos del formulario no se han enviado.";
}
?>

