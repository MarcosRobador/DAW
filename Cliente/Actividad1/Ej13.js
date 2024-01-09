"use strict"

let publicacionBlog = () => {

  let titulo = prompt("Titulo de la publicacion:");
  let contenido = prompt("Contenido de la publicacion:");

  // Verifica si se puso el titulo y el contenido
  if (!titulo || !contenido) {
    alert("Debes de poner tanto el titulo como el contenido par poder continuar.");
    return;
  }

  let etiquetas = prompt("Etiquetas (OPCIONAL)");

  alert("Publicacion de blog creada:\n\nTitulo: " + titulo + "\nContenido: " + contenido + (etiquetas ? "\nEtiquetas: " + etiquetas : ""));
};

publicacionBlog();