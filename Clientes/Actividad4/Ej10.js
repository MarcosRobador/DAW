"use strict"

function Accumulator(startingValue) {
    this.value = startingValue;
  
    this.read = function () {
      let userInput = parseFloat(prompt("Introduce un número:"));
      if (!isNaN(userInput)) {
        this.value += userInput;
      } else {
        alert("Entrada no válida. Por favor, ingresa un número.");
      }
    };
  }
  
  let accumulator = new Accumulator(1); // valor inicial 1
  accumulator.read(); // agrega el valor introducido por el usuario
  accumulator.read(); // agrega el valor introducido por el usuario
  alert(accumulator.value); // muestra la suma de estos valores
  