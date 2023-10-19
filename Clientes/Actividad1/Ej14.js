"use strict"

let reduceArray = (numeros) => {
  // El metodo reduce se utiliza para sumar todos los elementos del array
  // acumulador: almacena el valor acumulado de la suma
  // numero: valor actual de los numeros
  let suma = numeros.reduce((acumulador, numero) => acumulador + numero, 0);
  return suma;
};

let numeros = [1, 2, 3, 4, 5];

// Se muestra una alerta con el resultado de la suma de los elementos del array.
alert("La suma de los elementos del array es: " + reduceArray(numeros));
