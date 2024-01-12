"use script"

/*No funciona como se espera porque el return false de la 
funcion no se esta llendo al evento onclick del enlace. 
Para arreglarlo tengo que modificar el onclick para que sea 
return handler()*/

function handler() {
    alert("...");
    return false;
  }