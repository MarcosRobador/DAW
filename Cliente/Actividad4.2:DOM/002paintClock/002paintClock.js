"use strict"

/*La funcion actualizacion formatea las horas, minutos y segundos 
para mostrarlos con dos digitos. La funcion clockStart 
inicia el reloj, estableciendo un temporizador (setInterval)
que llama a actualizacion cada segundo. La funcion clockStop 
detiene el reloj, limpiando el temporizador (clearInterval) 
y restableciendo tiempo a nulo.*/

let tiempo;

  function actualizacion() {
    let reloj = document.getElementById('clock');
    let fecha = new Date();
      
    let hora = fecha.getHours();
      if (hora < 10) hora = '0' + hora;
        reloj.children[0].innerHTML = hora;

    let minuto = fecha.getMinutes();
      if (minuto < 10) minuto = '0' + minuto;
        reloj.children[1].innerHTML = minuto;

    let segundo = fecha.getSeconds();
      if (segundo < 10) segundo = '0' + segundo;
        reloj.children[2].innerHTML = segundo;
  }

  function start() {
      
    if (!tiempo) {
      tiempo = setInterval(actualizacion, 1000);
    }
  }

  function stop() {
    clearInterval(tiempo);
    tiempo = null; 
  }