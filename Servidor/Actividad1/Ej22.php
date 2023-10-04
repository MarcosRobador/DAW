<?php

//Funcion a la que se le establece $length que determinara la longitud en este caso de la contraseña
function generadorContraseña($length) {
    // Caracteres permitidos a la hora que se genere la contraseña
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
    // Se usa para asegurarse de que la generacion de caracteres se realice de manera valida y dentro de los limites de los caracteres permitidos
    $caracteresLength = strlen($caracteres);
    
    // Variable que se utilizara para generar la contraseña
    $contraseña = '';

    // Genera la contraseña hasta un llimite lenght
    for ($i = 0; $i < $length; $i++) {
       
        // random_int: genera un numero entero aleatorio, los parametros indican el rango en el que se generara
        $randomI = random_int(0, $caracteresLength - 1);
        
        // Agregar el caracter correspondiente al indice aleatorio a la contraseña
        $contraseña .= $caracteres[$randomI];
    }
    
    return $contraseña;
}

// Generar una contraseña de 10 caracteres
$randomPassword = generadorContraseña(10);
echo $randomPassword;

?>