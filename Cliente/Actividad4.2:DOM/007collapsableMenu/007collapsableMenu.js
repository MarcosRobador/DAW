"use strict"

/*Obtiene 'menuID' y 'titulo'. Cuando se hace clic en 'titulo', se activa una funcion 
que alterna la clase 'open' en el elemento 'menuID', lo que puede mostrar y ocultar el menu*/

let menuJ = document.getElementById('menuID');
    let tituloJ = menuJ.querySelector('.titulo');

    tituloJ.onclick = function() {
      menuJ.classList.toggle('open');
    };