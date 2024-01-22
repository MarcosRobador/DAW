"use strict"

//Recorre todos los elementos <li> del documento, recupera 
//y muestra su texto directo, y cuenta cuantos <li> estan 
//anidados dentro de cada uno.
document.querySelectorAll('li').forEach(function(li) {
    let textContent = li.childNodes[0].textContent.trim();
    let anidadoLi = li.getElementsByTagName('li').length;
    console.log(`Texto: "${textContent}", Numero de li anidados: ${anidadoLi}`);
});