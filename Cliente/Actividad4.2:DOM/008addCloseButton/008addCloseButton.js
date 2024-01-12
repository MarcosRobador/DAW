"use strict"

/**/

let cuadros = document.querySelectorAll('.cuadro');
    
for(let cuadroJ of cuadros) {
  cuadroJ.insertAdjacentHTML("afterbegin", '<button class="borrar">[x]</button>');
  cuadroJ.firstChild.onclick = () => cuadroJ.remove();
}