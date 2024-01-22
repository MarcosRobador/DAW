"use strict"

function cambiarImagen(modo, imagenOficina) {
    let imagen = document.getElementById(imagenOficina);
    if(modo === 'noche') {
        imagen.src = 'img/oficina-noche.png';
    } else {
        imagen.src = 'img/oficina-dia.png';
    }
}

function cambiarImagen2(modo, imagenFabrica) {
    let imagen = document.getElementById(imagenFabrica);
    if(modo === 'noche') {
        imagen.src = 'img/fabrica-noche.png';
    } else {
        imagen.src = 'img/fabrica-dia.png';
    }
}

function cambiarImagen3(modo, imagenAlmacen) {
    let imagen = document.getElementById(imagenAlmacen);
    if(modo === 'noche') {
        imagen.src = 'img/almacen-noche.png';
    } else {
        imagen.src = 'img/almacen-dia.png';
    }
}


$(document).ready(function() {
    $("#acordeon h3").each(function() {
        $(this).click(function() {
            $("#acordeon .contenido").not($(this).next()).slideUp();

            $(this).next().slideToggle();
        });
    });
});

