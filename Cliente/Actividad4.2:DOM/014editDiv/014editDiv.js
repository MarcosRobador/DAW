"use strict"

/*Convierte un elemento HTML en un area de texto editable 
al hacer clic en el. Al presionar 'Enter' o al desenfocar 
el area, se guardan las modificaciones y se muestra*/

let area = null;
let vista = document.getElementById('pulsa');

vista.onclick = function() {
  iniciarEdicion();
};

function iniciarEdicion() {
  area = document.createElement('textarea');
  area.className = 'edit';
  area.value = vista.innerHTML;

  area.onkeydown = function(evento) {
    if (evento.key == 'Enter') {
      this.blur();
    }
  };

  area.onblur = function() {
    finalizarEdicion();
  };

  vista.replaceWith(area);
  area.focus();
}

function finalizarEdicion() {
  vista.innerHTML = area.value;
  area.replaceWith(vista);
}
