"use strict"

let calculator = {
    a: 0,
    b: 0,

    //Solicita al usuario los datos, convirtiendolos en float
    read: function() {
      this.a = parseFloat(prompt("Introduce el valor de a:"));
      this.b = parseFloat(prompt("Introduce el valor de b:"));
    },
    sum: function() {
      return this.a + this.b;
    },
    mul: function() {
      return this.a * this.b;
    }
  };
  
  //Llama al metodo para que el usurario ponga los datos
  calculator.read();
  alert(calculator.sum());
  alert(calculator.mul());
  