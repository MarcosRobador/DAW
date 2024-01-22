"use strict"

/*Agrega un boton de cierre '[x]' a cada elemento con la 
clase 'cuadro'. Al hacer clic en este boton, se elimina el 
elemento 'cuadro'*/

let cuadros = document.querySelectorAll('.cuadro');
    
for(let cuadroJ of cuadros) {
  cuadroJ.insertAdjacentHTML("afterbegin", '<button class="borrar">[x]</button>');
  cuadroJ.firstChild.onclick = () => cuadroJ.remove();
}