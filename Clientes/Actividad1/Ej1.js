/*
En el caso de que contenga el else, si tiene 18 años devolvera true y si no, devolvera el mensaje. Sin embargo,
si no esta el else, devolvera igualmente true tenga la edad que tenga.
*/

"use strict"

function checkAge(age) {

    if (age > 18) {
  
      return true;
  
    } else {
  
      return confirm('¿Tus padres te permitieron?');
  
    }

  }