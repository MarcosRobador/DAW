"use strict"

//001
/*Selecciona todos los nodos hijos 
del div con id contenedor y los muestra en la consola. */
let contenedor = document.getElementById('contenedor');
let nodosHijos = contenedor.childNodes;
nodosHijos.forEach(nodo => {
    console.log(nodo);
});

//002
/*Muestra el primer nodo hijo del div con id contenedor 
en la consola.*/
let primerHijo = contenedor.firstChild;
console.log(primerHijo);

//003
/*Muestra el ultimo nodo hijo del div con id contenedor en
la consola.*/
let ultimoHijo = contenedor.lastChild;
console.log(ultimoHijo);

//004
/*Selecciona el elemento h1 y luego muestra su elemento 
padre en la consola.*/
let h1 = document.querySelector('h1');
let elementoPadre = h1.parentElement;
console.log(elementoPadre);

//005
/*Selecciona todos los elementos hijos de la lista 
desordenada y los muestra en la consola. La propiedad 
children lo que devuelve una contiene solo los elementos 
hijos*/
let listaDesordenada = document.querySelector('ul');
let elementosHijos = listaDesordenada.children;
for (let i = 0; i < elementosHijos.length; i++) {
    console.log(elementosHijos[i]);
}

//006
/*Muestra el primer elemento hijo del div con id contenedor
en la consola. Devuelve elementos, omitiendo otros tipos de 
nodos como los nodos de texto.*/
let primerElementoHijo = contenedor.firstElementChild;
console.log(primerElementoHijo);

//007
/*Muestra el ultimo elemento hijo del div con id contenedor 
en la consola*/
let ultimoElementoHijo = contenedor.lastElementChild;
console.log(ultimoElementoHijo);

//008
/*Muestra el elemento que precede al parrafo con clase 
parrafo en la consola.La propiedad previousElementSibling 
devuelve el elemento hermano anterior al elemento actual 
en el DOM, ignorando nodos que no son elementos */
let parrafo = document.querySelector('.parrafo');
let elementoAnterior = parrafo.previousElementSibling;
console.log(elementoAnterior);

//009
/*Muestra el elemento que sigue al parrafo con clase parrafo
en la consola.*/
let elementoSiguiente = parrafo.nextElementSibling;
console.log(elementoSiguiente);

//010
/*Selecciona el primer elemento li dentro de la lista 
desordenada (ul) y mostrará en la consola su nodeType, 
nodeName, y tagName.*/
let primerLi = document.querySelector('ul li');
console.log('nodeType:', primerLi.nodeType);
console.log('nodeName:', primerLi.nodeName);
console.log('tagName:', primerLi.tagName);

//011
/*Selecciona el enlace (<a>) y muestra en la consola su 
innerHTML y outerHTML.*/
let enlace = document.querySelector('a');
console.log('innerHTML:', enlace.innerHTML);
console.log('outerHTML:', enlace.outerHTML);

//012
/*Selecciona el parrafo con clase parrafo y muestra en la 
consola su nodeValue y textContent.*/
console.log('nodeValue:', parrafo.nodeValue);
console.log('textContent:', parrafo.textContent);

//013
/*Comprueba si el div con id contenedor tiene el atributo 
hidden. Si lo tiene, imprime "El elemento está oculto" 
en la consola. De lo contrario, imprime "El elemento no 
esta oculto".*/
if (contenedor.hasAttribute('hidden')) {
    console.log("El elemento está oculto");
} else {
    console.log("El elemento no está oculto");
}
