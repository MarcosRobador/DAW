"use strict"

function random(min, max) {
    return min + Math.random() * (max - min);
  }
  
  alert(random(1, 55)); //Numero entre 1 (inclusive) y 55 (exclusivo)
  alert(random(1, 80)); // Genera otro numero del rango
  alert(random(1, 15)); // ...
  