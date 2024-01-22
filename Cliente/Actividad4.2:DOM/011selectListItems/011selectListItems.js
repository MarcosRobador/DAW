"use strict"

/*Al hacer clic en un elemento, si se presiona command, se 
puedes seleccionar varios sin command, solo se selecciona
un elemento, deseleccionando los demas.*/

lista.onclick = function(event) {
    if (event.target.tagName != "LI") return;

    if (event.ctrlKey || event.metaKey) {
      seleccionar(event.target);
    } else {
      soloSelec(event.target);
    }

}

lista.bajo = function() {
    return false;
};

function seleccionar(li) {
    li.classList.toggle('selec');
}

function soloSelec(li) {
    let selecJ = lista.querySelectorAll('.selec');
    for(let elem of selecJ) {
      elem.classList.remove('selec');
    }
    li.classList.add('selec');
}