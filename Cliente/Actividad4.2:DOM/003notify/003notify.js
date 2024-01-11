"use strict"

/*La funcion showNotification crea una notificacion 
personalizable, mostrandola por 1.5 segundos. Con 
parametros para posicion, contenido HTML y clase CSS. Al 
final del codigo, esta funcion se llama con parametros 
especificos para mostrar una notificacion y un estilo 
por la clase "welcome".*/

function showNotification({top = 0, right = 0, html = "", className = ""}) {
    const notification = document.createElement('div');
    notification.className = `notification ${className}`;
    notification.style.top = `${top}px`;
    notification.style.right = `${right}px`;
    notification.innerHTML = html;
    document.body.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, 1500);
}

showNotification({
    top: 10,
    right: 10,
    html: "Hello!",
    className: "welcome"
});
