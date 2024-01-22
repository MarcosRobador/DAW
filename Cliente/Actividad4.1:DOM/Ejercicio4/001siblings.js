"use strict"

//001
//¿Es cierto que elem.lastChild.nextSibling siempre es null?
//¿Es cierto que elem.children[0].previousSibling siempre es null ?

let valor = document.getElementById('parrafo');
//Muestra null
console.log(valor.lastChild.nextSibling); 
//Muestra null
console.log(valor.children[0].previousSibling); 

