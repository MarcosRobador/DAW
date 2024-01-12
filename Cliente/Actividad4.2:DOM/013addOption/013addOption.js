"use strict"

/*Muestra el valor de la opcion seleccionada en un menu 
desplegable genres, luego añade una nueva opcion "Clasico" 
a este menu y la selecciona automaticamente.*/

let opcionSeleccionada = genres.options[genres.selectedIndex];
alert( opcionSeleccionada.value );

let nuevaOpcion = new Option("Clasico", "classic");
genres.append(nuevaOpcion);

nuevaOpcion.selected = true;
