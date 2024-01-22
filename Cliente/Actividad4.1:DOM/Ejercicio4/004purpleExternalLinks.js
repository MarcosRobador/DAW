"use strict"
//Selecciona todos los enlaces y cambia su color a "purple"
//si su direccion (href) apunta a un sitio externo, 
//excepto si es parte del dominio "http://internal.com".

document.querySelectorAll('a').forEach(function(link) {
    if (link.href.includes('://') && !link.href.startsWith('http://internal.com')) {
        link.style.color = 'purple';
    }
});
