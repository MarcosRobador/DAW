"use strict"

/*La función ejecutarConTeclas, ejecuta una accion 
cuando se presionan Q y W a la vez. Usa oyentes de eventos 
para ver las teclas presionadas y sueltas, y activa la 
función dada solo cuando todas las teclas requeridas estan 
presionadas al mismo tiempo*/

function ejecutarConTeclas(funcion, ...codigos) {
    let teclasPresionadas = new Set();

    document.addEventListener('keydown', function(evento) {
        teclasPresionadas.add(evento.code);

        for (let codigo of codigos) {
            if (!teclasPresionadas.has(codigo)) {
                return;
            }
        }

        funcion();
    });

    document.addEventListener('keyup', function(evento) {
        teclasPresionadas.delete(evento.code);
    });
}

ejecutarConTeclas(
    () => alert("¡Hola!"),
    "KeyQ",
    "KeyW"
);
