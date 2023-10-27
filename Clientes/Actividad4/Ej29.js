"use strict"

let grupos = [
    {nombre: "ACDC", genero: "Rock"},
    {nombre: "Cold Play", genero: "Pop"},
    {nombre: "NCT Dream", genero: "K-Pop"},
    {nombre: "Metallica", genero: "Heavy Metal"}
];

// Grupos por genero obteniendo los que son de "Heavy Metal"
let gruposHeavyMetal = grupos.filter(function(grupo) {
    return grupo.genero === "Heavy Metal";
});

alert("Grupos de Heavy Metal:", gruposHeavyMetal);

// Busca en los grupos usando "find" el grupo con nombre "Cold Play"
let coldPlay = grupos.find(function(grupo) {
    return grupo.nombre === "Cold Play";
});

console.log("Grupo Cold Play:", coldPlay);

// ¿En qué posición del array se encuentra "Cold Play"?
let posicionColdPlay = grupos.findIndex(function(grupo) {
    return grupo.nombre === "Cold Play";
});

alert("Posición de Cold Play en el array:", posicionColdPlay);
