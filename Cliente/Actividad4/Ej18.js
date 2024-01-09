"use strict"

function randomInteger(min, max) {
    // Math.floor para redondear hacia abajo el resultado de Math.random()
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  

  alert(randomInteger(1, 5)); //Numero entero entre 1 y 5, incluyendo ambos
  alert(randomInteger(1, 10)); //...
  alert(randomInteger(1, 8)); // ...