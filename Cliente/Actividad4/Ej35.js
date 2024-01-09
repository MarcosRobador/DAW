"use strict"

function getSecondsToAfterTomorrow() {
    // Obtiene la fecha actual
    let now = new Date();
  
    // Crea una nueva fecha para el día despues de mañana
    let depues = new Date(now);
    despues.setDate(now.getDate() + 2);
  
    // Resta la fecha actual a la fecha del dia despues de mañana y convierte la diferencia a segundos
    let differenceInSeconds = (despues - now) / 1000;
  
    return differenceInSeconds;
  }
  
  let segundos = getSecondsToAfterTomorrow();
  alert("Faltan", segundos, "segundos para el dia despues de mañana.");
  