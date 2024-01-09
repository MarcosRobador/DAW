// 001

/* Selecciona el elemento div con el ID contenedor.
Obtiene todos los nodos hijos de este elemento, incluyendo elementos, texto, comentarios, etc.
Itera sobre cada uno de estos nodos y los muestra en la consola. */

var contenedor = document.getElementById('contenedor');
var nodosHijos = contenedor.childNodes;
nodosHijos.forEach(function(nodo) {
console.log(nodo);
});

// 002

/* El código selecciona y muestra el primer hijo del div con id contenedor:
Selecciona el div usando getElementById.
Obtiene el primer hijo del div con firstChild.
Muestra este nodo en la consola. */

var contenedor = document.getElementById('contenedor');
var primerHijo = contenedor.firstChild;
console.log(primerHijo);

// 003

/*  */