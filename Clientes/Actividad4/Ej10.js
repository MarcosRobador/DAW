"use strict"

function Accumulator(startingValue) {
    this.value = startingValue;
  
    this.read = function () {
      let userInput = parseFloat(prompt("Introduce un numero:"));
      if (!isNaN(userInput)) {
        this.value += userInput;
      } else {
        alert("Entrada no valida. Por favor, ingresa un numero.");
      }
    };
  }
  
  
  let accumulator = new Accumulator(1); // Valor inicial 1
  accumulator.read(); // Agrega el valor introducido por el usuario
  accumulator.read(); // Agrega el valor introducido por el usuario
  alert(accumulator.value); // Muestra la suma de estos valores
  