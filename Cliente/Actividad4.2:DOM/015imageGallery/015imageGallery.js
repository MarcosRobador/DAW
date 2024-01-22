"use strict"

/*Cuando el usuario hace clic en una miniatura, la imagen 
principal cambia para mostrar la imagen de la miniatura 
clickeada. Añadiendo un controlador de eventos de clic a 
cada miniatura tras la carga completa del DOM.*/

document.addEventListener('DOMContentLoaded', () => {
    let imagenPrincipal = document.getElementById('imagenPrincipal');
    let miniaturas = document.querySelectorAll('.miniatura');

    miniaturas.forEach(miniatura => {
        miniatura.addEventListener('click', function() {
            imagenPrincipal.src = this.src; 
        });
    });
});
