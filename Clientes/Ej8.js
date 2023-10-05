"use strict"; 

let numeros = [1, 2, 3, 4, 5, 6, 7, 8];

// Funcion que toma como parametro un array
let pares = (array) => {
  // Nuevo array para almacenar los numeros pares
  let array2 = []; 

  // Inicializo i para recorrer el primer array y j para seguir la posicion en el segundo array
  for (let i = 0, j = 0; i < array.length; i++) {
    
    // Verifica que el numero sea divisible de 2
    if (array[i] % 2 === 0) {
        // Se asigna el numero par a la posicion j en segundo array
        array2[j] = array[i]; 
        j++; 
    }
  }
  
  return array2; 
  
};




// Almaceno la funcion con el array numeros
let numerosPares = pares(numeros);

// Muestro los numeros pares convirtiendolos a una cadena y separandolos por comas
alert("Numeros pares: " + numerosPares.join(", "));