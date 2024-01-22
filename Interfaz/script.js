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

$(document).ready(function() {
    // Genera numeros aleatorios para el captcha
    function generarCaptcha() {
        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;
        $('#num1').text(num1);
        $('#num2').text(num2);
        return num1 + num2;
    }

    let resultadoCorrecto = generarCaptcha();

    // Funcion para validar el captcha
    window.validarCaptcha = function() {
        let resultadoUsuario = parseInt($('#captcha').val());
        if (resultadoUsuario === resultadoCorrecto) {
            $('#resultadoCaptcha').text('✓').removeClass('incorrecto').addClass('correcto');
        } else {
            $('#resultadoCaptcha').text('✗').removeClass('correcto').addClass('incorrecto');
        }
    };

    // Agrega y remueve clases al enfocar y desenfocar campos de texto
    $('#contactForm input, #contactForm textarea').focusin(function() {
        $(this).addClass('input-focused').removeClass('input-blurred');
    });

    $('#contactForm input, #contactForm textarea').focusout(function() {
        $(this).removeClass('input-focused').addClass('input-blurred');
    });

    // Valida el formulario antes del envio
    $('#contactForm').submit(function(e) {
        e.preventDefault();

        let camposCompletos = $('#nombre').val() && $('#email').val() && $('#comentario').val();
        let politicaAceptada = $('#politicaPrivacidad').is(':checked');
        let captchaCorrecto = $('#captcha').val() == resultadoCorrecto;

        if (camposCompletos && politicaAceptada && captchaCorrecto) {
            alert('Formulario enviado correctamente.');
        } else {
            alert('Por favor, completa todos los campos requeridos, acepta la política de privacidad y resuelve correctamente el captcha.');
        }
    });
});

// Boton para ocultar formulario
$(document).ready(function() {
    $('#toggleForm').click(function() {
        $('#contactForm').slideToggle();
    });
});
