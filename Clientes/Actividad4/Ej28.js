"use strict"

let acdc = { name: "ACDC", age: 25 };
let metallica = { name: "Metallica", age: 30 };
let guns = { name: "Guns and Roses", age: 28 };
let bands = [acdc, metallica, guns];

// Metodo map() para extraer los nombres de los objetos
let nom = bands.map(function(band) {
  return band.name;
});

alert(nom); 
