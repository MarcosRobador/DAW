<?php

//ucwords: convierte la primera letra de cada palabra en mayuscula
$ejemplo = "buenos dias mundo <p>";
$mayus = ucwords($ejemplo);
echo $mayus;

//strrev: invierte una cadena, colocando el ultimo caracter primero...
$ejemplo2 = "Buenos dias";
$inverso = strrev($ejemplo2);
echo $inverso;

//str_repeat: repite la misma cadena segun le especifiques
$ejemplo3 = "<p> Buenos dias ";
$repeat = str_repeat($ejemplo3, 5);
echo $repeat;

//Es un algoritmo de codificacion de 128 bits que se compone de 32 caracteres 
//hexadecimales y sirve para encritpar archivos y contraseñas
$ejemplo4 = "mi_contraseña_secreta";
$contraseña = md5($ejemplo4);
echo $contraseña;

?>