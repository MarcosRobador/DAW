"use strict"

let schedule = {};

function isEmpty(obj) {
  
    // Utilizo el for in para recorrerme las propiedades del objeto
    for (let key in obj) {
    
    //Si se encuentran propiedades
    return false; 
  }

  //Si no se encuentran propiedades
  return true; 
}

//Devuelve true porque el objeto esta vacio
alert(isEmpty(schedule));

schedule["8:30"] = "Hora de levantarse";

//Devuelve false porque le he añadido una propiedad
alert(isEmpty(schedule)); 
