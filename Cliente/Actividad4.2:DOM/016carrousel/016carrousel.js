"use strict"

/*Carrusel de imagenes, permite navegar entre ellas. 
Al hacer clic en los botones, el carrusel muestra la 
imagen anterior o siguiente*/

document.addEventListener('DOMContentLoaded', () => {
    let imagenes = document.querySelectorAll('.imagen-carrusel');
    let indiceActual = 0;

    function mostrarImagen(indice) {
        imagenes.forEach((img, idx) => {
            img.style.display = idx === indice ? 'block' : 'none';
        });
    }

    document.getElementById('botonAnterior').addEventListener('click', () => {
        indiceActual = (indiceActual - 1 + imagenes.length) % imagenes.length;
        mostrarImagen(indiceActual);
    });

    document.getElementById('botonSiguiente').addEventListener('click', () => {
        indiceActual = (indiceActual + 1) % imagenes.length;
        mostrarImagen(indiceActual);
    });
});
