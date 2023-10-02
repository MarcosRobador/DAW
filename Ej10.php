<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $inicio = $_POST["inicio"];
    $fin = $_POST["fin"];

    echo "LISTA: ";

    for ($i = $inicio; $i <= $fin; $i += 2) {
        echo "<li>$i</li>";
    }

} else {
    echo "Introduce el inicio y el fin de la lista de numeros pares en la URL.";
}

?>