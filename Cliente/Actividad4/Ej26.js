"use strict"

// Funcion para calcular los primeros 20 numeros de Fibonacci
function fibonacci(n) {
    let fib = [0, 1];
    while (fib.length < n) {
      fib.push(fib[fib.length - 1] + fib[fib.length - 2]);
    }
    return fib;
  }
  
  // Llama a la funcion para obtener los primeros 20 numeros de Fibonacci
  let fibonacci20 = fibonacci(20);
  alert(fibonacci20);
  