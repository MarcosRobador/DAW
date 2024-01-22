"use strict"

function getWeekDay(date) {
    // Array con los nombres de los dias de la semana
    let dias = ['SU', 'MO', 'TU', 'WE', 'TH', 'FR', 'SA'];
  
    // El numero del dia de la semana 
   let diasnum = date.getDay();
  
    // Numero para acceder al nombre abreviado correspondiente en el array
    return dias[diasnum];
  }
  
  let date = new Date(2012, 0, 3); 
  alert(getWeekDay(date)); 
  