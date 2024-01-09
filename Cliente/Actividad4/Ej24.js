"use strict"

let fruits = ["Banana", "Manzana", "Fresa"];

// Cereza al principio del array
fruits.unshift("Cereza");

// Melocoton al final del array
fruits.push("Melocoton");

// Array con los añadidos
for (let i = 0; i < fruits.length; i++) {
  alert("Cereza y melocoton añadidos: "+fruits[i]);
}

// Se elimina el primer elemento
fruits.shift();

// Se elimina el ultimo elemento
fruits.pop();


for (let i = 0; i < fruits.length; i++) {
    alert("Con elementos eliminados" + fruits[i]);
  }
