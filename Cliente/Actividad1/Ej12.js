"use strict"

function crearCuenta() {
  
  let nombre = prompt("Nombre de usuario:");
  let correo = prompt("Correo electronico:");

  // Verifica si se ha escrito el nombre y el correo
  if (!nombre|| !correo) {
    alert("El nombre y el correo son obligatorios para poder continuar.");
    return;
  }

  let telefono = prompt("Numero de telefono. (OPCIONAL)");
  
  alert("Cuenta creada:\n\nNombre de usuario: " + nombre + "\nCorreo electronico: " + correo + (telefono ? "\nNumero de telefono: " + telefono : ""));
}

crearCuenta();

