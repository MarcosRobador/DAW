<?php
/* 

Match es similar a una sentencia  switch. La principal ventaja de match es que puede 
utilizarse para comparar una expresión con varios valores y ejecutar  código con el coincidente. 

*/ 

if (isset($_GET["numero"])) {
    $numero = (int)$_GET["numero"];

    $cuenta = match ($numero) {
        1 => "Suerte",
        2 => "Mala suerte",
        3 => "Eres del Betis",
        4 => "Te encontraras un billete de 100",
        5 => "Te encontraras un billete de 100, pero del Monopoly",
        default => "No es un numero del 1 al 5",
    };

    echo $cuenta;
} else {
    echo "Pon un numero del 1 al 5 en la URL:";
}
