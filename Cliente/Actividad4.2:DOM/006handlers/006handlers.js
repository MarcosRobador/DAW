"use strict"

/*Cuando haces clic en el boton, se muestran dos alertas
primero "1" y luego "2". Esto se debe a que el intento de 
eliminar el primer controlador de eventos no tiene efecto 
, y ambos controladores, el añadido por addEventListener y 
el onclick, se ejecutan.*/

button.addEventListener("click", () => alert("1"));
button.removeEventListener("click", () => alert("1"));
button.onclick = () => alert(2);


  