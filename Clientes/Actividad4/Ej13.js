"use strict"

let num1 = prompt("Introduzca un numero");
let num2 = prompt("Introduzca otro numero");

// Convierte las cadenas ingresadas a numeros
num1 = parseFloat(num1);
num2 = parseFloat(num2);

// Verifica si las conversiones se realizan correctamente y realiza la suma
if (!isNaN(num1) && !isNaN(num2)) {
  let suma = num1 + num2;
  alert("Suma: " + suma);
} else {
  alert("Ingresa numeros validos");
}
