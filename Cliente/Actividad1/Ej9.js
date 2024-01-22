"use strict";

function calcularFactorial() {
 
    // parseInt analiza que sea un numero entero
    let numero = parseInt(prompt("Introduce un numero:"));

    // Condicional que mira si no es un numero y es positivo
    if (isNaN(numero) || numero < 0) {
        alert("Introduce un numero positivo");
        return; 
    }

    let factorial = 1;

    // Bucle para obtener el factorial
    for (let i = 1; i <= numero; i++) {
        factorial *= i;
    }

    
    alert("El factorial de " + numero + " es " + factorial);
}

calcularFactorial();
