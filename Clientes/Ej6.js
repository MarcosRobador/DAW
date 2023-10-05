"use strict"; 

function cani(cadena) {
    // Convierte la cadena a minusculas
    cadena = cadena.toLowerCase();
    // Reemplaza todas las c por k
    cadena = cadena.replace(/c/g, 'k');
    // Agrega h al final 
    cadena += 'hhh';

    // Variable que cada vez que pasa por el bucle va acumulando la transformacion de la cadena cani
    let resultado = '';
    // Booleano que permite alternar las mayus y minus
    let mayuscula = true;

    // Recorre la cadena caracter por caracter
    for (let i = 0; i < cadena.length; i++) {
        if (mayuscula) {
            // Convierte el caracter en el que se encuentra en mayus y lo agrega a resultado
            resultado += cadena[i].toUpperCase();
        } 
        else {
            // Agrega el caracter tal como esta al resultado
            resultado += cadena[i];
        }
        // Alterna entre true y false ene l bucle, de manera que va alternando las mayus y minus
        mayuscula = !mayuscula; 
    }

    return resultado;
}


let frase = prompt("Introduce una frase para convertirla a estilo cani:");

if (frase) {
    // Llama a la función para convertir la frase
    let fraseCani = cani(frase);
    alert("Frase en estilo cani: " + fraseCani);
} else {
    alert("No pusiste ninguna frase.");
}
