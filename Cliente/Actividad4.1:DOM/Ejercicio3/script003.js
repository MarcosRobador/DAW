"use strict"

//001
/*Selecciona el primer enlace (<a>) y utiliza hasAttribute 
para verificar si tiene el atributo target. */
let valor = document.querySelector('a');
if (valor.hasAttribute('target')) {
    console.log('Valor del atributo target:', valor.getAttribute('target'));
} else {
    console.log('Target no esta');
}

//002
/*Selecciona el primer elemento li dentro de la lista 
y utiliza hasAttribute para verificar si tiene el atributo 
data-tipo. */

let liPrimero = document.querySelector('ul li');
if (liPrimero.hasAttribute('data-tipo')) {
    console.log('Valor data-tipo:', liPrimero.getAttribute('data-tipo'));
} else {
    console.log('El atributo data-tipo no esta');
}

//003
/*Selecciona el parrafo y luego utiliza setAttribute para 
cambiar el valor de data-tipo. */

let parrafo = document.querySelector('.parrafo');
parrafo.setAttribute('data-tipo', 'nuevo-parrafo');
console.log('Nuevo valor del atributo data-tipo:', parrafo.getAttribute('data-tipo'));

//004
/*Selecciona el primer elemento h1 en el documento y 
utiliza setAttribute para agregar el atributo style con 
el valor color: blue;. */

let titulo = document.querySelector('h1');
titulo.setAttribute('style', 'color: blue;');

//005
/*Selecciona el primer elemento li dentro de una lista 
desordenada y utiliza removeAttribute para eliminar 
el atributo data-tipo. */

liPrimero.removeAttribute('data-tipo');
Array.from(liPrimero.attributes).forEach(attr => {
    console.log(attr.name + ': ' + attr.value);
});

//006
/*Selecciona el primer enlace en el documento y revisa 
si hay atributos personalizados*/

if (Object.keys(valor.dataset).length > 0) {
    for (let atributo in valor.dataset) {
        console.log(`Atributo personalizado - ${atributo}: ${valor.dataset[atributo]}`);
    }
} else {
    console.log('No hay atributos personalizados en el dataset');
}