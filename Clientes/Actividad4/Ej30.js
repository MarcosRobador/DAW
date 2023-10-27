"use strict"

function groupById(arr) {
    return arr.reduce(function(obj, item) {
      // Se usa el valor de "id" como clave (key) y el objeto completo como valor
      obj[item.id] = item;
      return obj;
    }, {});
  }
  
 
  let personajes = [
    { id: 1, nombre: "Luke Skywalker", pelicula: "Star Wars" },
    { id: 2, nombre: "Harry Potter", pelicula: "Harry Potter" },
    { id: 3, nombre: "Frodo Baggins", pelicula: "El Señor de los Anillos" }
  ];
  
 let personajesObjeto = groupById(personajes);
  alert(personajesObjeto);
  