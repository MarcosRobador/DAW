"use strict"

/* 
Las dos funciones devuelven lo mismo que la original, lo unico que 
cambia es la forma de escribirla, en este caso usando usando el operador 
? y ||.
*/
function checkAge(age) {
    return (age > 18) ? true : confirm('¿Tienes permiso de tus padres?');
  }
  
  function checkAge(age) {
    return (age > 18) || confirm('¿Tienes permiso de tus padres?');
  }
  