<?php

    $inicio = $_POST["inicio"];
    $fin = $_POST["fin"];

    echo "LISTA: ";

    for ($i = $inicio; $i <= $fin; $i += 2) {
        echo "<li>$i</li>";
    }

?>