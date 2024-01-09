"use strict"

//La tabla con id="age-table"

let tabla = document.getElementById("age-table");

//Todos los elementos label dentro de la tabla 

let labelsTabla = tabla.getElementsByTagName("label");

//El primer td en la tabla

let primerTd = tabla.getElementsByTagName("td")[0];


//El form con name="search"

let formSearch = document.getElementsByName("search")[0];

//El primer input en ese formulario

let primerInput = formSearch.getElementsByTagName("input")[0];

//El ultimo input en ese formulario

let inputsForm = formSearch.getElementsByTagName("input");
let ultimoInpunt = inputsForm[inputsForm.length - 1];
