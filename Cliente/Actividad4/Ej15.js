"use strict"

function readNumber() {
    let num;
    while (true) {
      num = prompt("Ingresa un numero:");
      
      // Al presionar "CANCEL" o ha ingresar una línea vacía
      if (num === null || num === "") {
        return null; 
      }
      
      let number = parseFloat(num);
      
      if (!isNaN(number)) {
        return number; // Devuelve el numero valido
      }
      
      // Si no es un numero valido, muestra un mensaje de error y vuelve a solicitar la entrada
      alert("Por favor, ingresa un número válido.");
    }
  }
  
  let resultado = readNumber();
  
  if (resultado === null) {
    alert("'CANCEL'");
  } else {
    alert("Has ingresado el número valido: " + result);
  }
  