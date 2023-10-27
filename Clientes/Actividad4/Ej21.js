"use strict"

function truncate(str, maxlength) {
    if (str.length > maxlength) {
      // Si la longitud de la cadena es mayor que maxlength, se agrega puntos suspensivos
      return str.slice(0, maxlength - 3) + '...';
    } else {
      return str;
    }
  }
  

alert(truncate("Lo que me gustaría contar sobre este tema es:", 20));
alert(truncate("Hola a todos!", 20)); 
  