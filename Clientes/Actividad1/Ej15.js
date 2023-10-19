"use strict"

let findMaxValue = (numeros) => {
  // reduce se utiliza para encontrar el valor máximo en el array
  let maximo = numeros.reduce((max, numero) => (numero > max ? numero : max), numeros[0]);
  return maximo;
};

let numeros = [10, 5, 27, 8, 14];

alert("El valor mas grande en el array es: "+ findMaxValue(numeros));