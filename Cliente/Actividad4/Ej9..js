"use strict"

function Calculator() {
    
    // Funcion que pide a y b
    this.read = function () {
      this.a = parseFloat(prompt("Introduce a:"));
      this.b = parseFloat(prompt("Introduce b:"));
    };
  
    // Realiza la suma
    this.sum = function () {
      return this.a + this.b;
    };
  
    // Realiza la multiplicacion
    this.mul = function () {
      return this.a * this.b;
    };
  }
  
  let calculator = new Calculator();
  calculator.read();
  alert("Sum=" + calculator.sum());
  alert("Mul=" + calculator.mul());
