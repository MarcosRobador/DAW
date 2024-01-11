"use strict"

/*Espera a que se cargue el contenido de la pagina, luego 
añade un controlador de clic al boton. Al hacer click el 
boton, se oculta*/

document.addEventListener('DOMContentLoaded', function() {
    let btn = document.getElementById('boton');
    btn.addEventListener('click', function() {
        this.style.display = 'none';
    });
});
