"use strict"

function ucFirst() {
    let cadena = prompt("Ingresa una cadena de texto en minuscula completamente:");
    
    if (cadena === null || cadena === "") {
      alert("No ingresaste una cadena valida");
      return;
    }
    
    // Verifica si la longitud de la cadena es 0, es decir, si la cadena está vacía.
    if (cadena.length === 0) {
      return cadena; 
    }
    
    // Convierte en mayúscula la primera letra con toUpperCase() y le añade el resto de la cadena desde la posicion 1
    let cadenaMayus = cadena[0].toUpperCase() + cadena.slice(1);
    
    alert("Primera letra mayuscula: " + cadenaMayus);
  }
  
  ucFirst();
  