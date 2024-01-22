"use strict"

let disney = [
    { nombre: "Hercules", pelicula: "Hercules" },
    { nombre: "Megara", pelicula: "Hercules" },
    { nombre: "Hades", pelicula: "Hercules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
];

// Meter a "Peter Pan" al final del array disney.
disney.push({ nombre: "Peter Pan", pelicula: "Peter Pan" });

// Pintar el array
console.log(disney);

// Meter a "El capitán Garfio" al principio del array con la película "Peter Pan".
disney.unshift({ nombre: "El capitan Garfio", pelicula: "Peter Pan" });

// Meter al "Cocodrilo" detrás del "capitán Garfio" con la película "Peter Pan".
disney.splice(2, 0, { nombre: "Cocodrilo", pelicula: "Peter Pan" });

// Obtener los personajes de la película "Peter Pan" y mostrarlos uno a uno.
console.log("Personajes de la pelicula 'Peter Pan':");
for (let personaje of disney) {
    if (personaje.pelicula === "Peter Pan") {
        console.log(personaje.nombre);
    }
}

// Encontrar el índice de "Campanilla".
const indiceCampanilla = disney.findIndex(personaje => personaje.nombre === "Campanilla");
console.log("Indice de Campanilla:", indiceCampanilla);

// Buscar al "Cocodrilo".
const cocodrilo = disney.find(personaje => personaje.nombre === "Cocodrilo");
console.log("Informacion del Cocodrilo:", cocodrilo);

// Función para barajar (reordenar de forma aleatoria) los elementos de un array.
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Ejemplo de uso de la función shuffle con una copia del array disney
let shuffledDisney = [...disney];
shuffle(shuffledDisney);
console.log("Array disney barajado:", shuffledDisney);
