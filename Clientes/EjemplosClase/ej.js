"use strict"

let Marcos = {
    edad:20,
    altura:1.83,
    apellido:"Robador"
}

let Joseka = {
    edad:20,
    altura:1.79,
    apellido:"Martin"
}

function sayApellido(){
    alert(this.apellido)
}

Marcos.sexo=sayApellido;
Joseka.sexo=sayApellido;

Marcos.sexo();
Joseka.sexo();