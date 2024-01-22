"use strict"

function extractCurrencyValue(str) {
    // `parseInt` para convertir la parte numerica en un numero entero
    // `str.slice(1)` para eliminar el signo de dolar antes del numero
    return parseInt(str.slice(1), 10);
  }
  
 
  let str = '$120';
  let value = extractCurrencyValue(str);
  alert(value); 
  