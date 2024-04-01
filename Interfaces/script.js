"use strict"

// Cambio de imagen cuando pasas el rato npor encima
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

//Acordeon
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


//Cambia de color cuando clikas en los enlaces del footer
$('footer a').click(function() {
    $(this).css('color', '#ff0000');
});

//Oculta los h4
$('.footer-column h4').click(function() {
    $(this).next().toggle();
});

//Animacion en footer
$('.footer-column h4').hover(function() {
    $(this).animate({ fontSize: '1.2em' }, 300);
}, function() {
    $(this).animate({ fontSize: '1em' }, 300);
});

// Uso de fadeIn()
$('#fadein-btn').click(function () {
    $('#fadein-element').fadeIn();
});

 // Evento Scroll
 $(window).scroll(function () {
    let scrollPos = $(window).scrollTop();
    $('#scroll-indicator').text('Scroll Pos: ' + scrollPos);
});

//Scroll
$(window).scroll(function () {
    let scrollPos = $(window).scrollTop();
    let windowHeight = $(window).height();
    let docHeight = $(document).height();

    let totalScroll = (scrollPos / (docHeight - windowHeight)) * 100;

    $('#scroll-indicator').text('Scroll Pos: ' + totalScroll.toFixed(0) + '%');

    // Cambiar el color y la opacidad basado en la posición de desplazamiento
    $('#scroll-indicator').css('background-color', `rgba(76, 175, 80, ${totalScroll / 100})`);
});

 // attr
 $('#fadein-btn').click(function(e) {
    e.preventDefault();
    $('#cambio').attr('href', 'https://www.apple.com/es/');
});