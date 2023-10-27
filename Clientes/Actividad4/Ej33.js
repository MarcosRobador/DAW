"use strict"

function getLocalDay(date) {
    let diaSemana = date.getDay();
    // Dia de la semana para que comience desde 1 (lunes) en lugar de 0 (domingo)
    if (diaSemana === 0) {
      diaSemana = 7; // Domingo se convierte en 7
    }
    return diaSemana;
  }
  
  function traducir(dia) {
    let diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
    return diasSemana[dia - 1];
  }
  
  let date = new Date(2012, 0, 3);
  let diaSemanaEuropeo = getLocalDay(date);
  let diaSemanaEspañol = traducir(diaSemanaEuropeo);
  
  alert(diaSemana); 
  