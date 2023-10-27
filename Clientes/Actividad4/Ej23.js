"use strict"

let thor = "Thor es el hijo de Odín";

// Largo de la cadena
alert(thor.length); 

// Encontrar la letra 'o'
alert(thor.indexOf('o')); 

// Encontrar el carácter que ocupa la posición 3
alert(thor[3]); 

// ¿Qué carácter ocupa la posición 1?
alert(thor[1]); 

// Trocea la cadena usando los espacios en blanco
alert(thor.split(' ')); 

// Reemplaza 'Thor' por 'Loki'
let loki = thor.replace('Thor', 'Loki');
alert(loki); 

// Recorta la cadena para que devuelva la palabra 'Odín'
alert(thor.slice(thor.indexOf('Odín'))); 

// ¿Puedes encontrar la letra 'a'? Demuéstralo
alert(thor.includes('a')); 

// Pon la mitad de la cadena en minúsculas (sin usar las posiciones de 0 a 11)
let primeraMitad = thor.slice(0, thor.length / 2);
let segundaMitad = thor.slice(thor.length / 2);
segundaMitad = segundaMitad.toLowerCase();
let resultado = primeraMitad + segundaMitad;
alert(resultado); 
