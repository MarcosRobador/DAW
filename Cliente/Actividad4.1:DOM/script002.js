//001
/*Crea una nueva fila con tres celdas y asigna los valores 
"Pedro", "28" y "Colombia" a cada una de ellas, respectivamente.
Luego, agrega esta fila al final de la tabla con id miTabla.*/

//Obtiene la tabla con id 'miTabla'
let tabla = document.getElementById('miTabla');

//Crea una nueva fila
let fila = document.createElement('tr');

//Crea las celdas para los datos
let celdaNombre = document.createElement('td');
let celdaEdad = document.createElement('td');
let celdaPais = document.createElement('td');

//Pone los datos a las celdas
celdaNombre.textContent = 'Pedro';
celdaEdad.textContent = '28';
celdaPais.textContent = 'Colombia';

//Añade las celdas a la fila
fila.appendChild(celdaNombre);
fila.appendChild(celdaEdad);
fila.appendChild(celdaPais);

//Añade la fila a la tabla
tabla.appendChild(fila);

//002
/*Selecciona la segunda fila de la tabla y actualiza el 
contenido de las celdas correspondientes al nombre y la edad.*/

// Localiza la fila que contiene a "Carlos"
let filaCarlos = tabla.rows[1];

// Cambia el nombre a "Juan" y la edad a "26"
filaCarlos.cells[0].textContent = 'Juan';
filaCarlos.cells[1].textContent = '26';

//003
/*Recorre todas las filas de la tabla, comienza desde la 
segunda fila para evitar la fila de encabezados, y compara 
las edades para encontrar la mas alta. */

let edadAlta = 0;
let nombreEdadAlta = '';

// Va a traves de las filas de la tabla
for (let i = 1; i < tabla.rows.length; i++) {
    let filaActual = tabla.rows[i];
    let edadActual = parseInt(filaActual.cells[1].textContent);

    // Verificar si la edad actual es mayor que la edad máxima registrada
    if (edadActual > edadAlta) {
        edadAlta = edadActual;
        nombreEdadAlta = filaActual.cells[0].textContent;
    }
}

console.log(nombreEdadAlta);

//004
/*Agrega una columna "Accion" a la tabla. En la cabecera de
la tabla, añade la etiqueta "Accion", y en las filas 
siguientes, inserta un botón "Eliminar" en cada fila. 
Al hacer clic en "Eliminar", se elimina la fila correspondiente de la tabla.*/

window.onload = function() {
    // Accede a la tabla por su ID
    let miTabla = document.getElementById("miTabla");

    // Iterar sobre las filas de la tabla, incluyendo la cabecera
    Array.from(miTabla.rows).forEach((fila, index) => {
        // Agregar una celda a cada fila
        let celda = fila.insertCell();

        // En la primera fila (cabecera), se añade un texto
        if (index === 0) {
            celda.textContent = 'Accion';
        } else {
            // En las demás filas, se añade un botón
            let btnEliminar = document.createElement("button");
            btnEliminar.innerText = "Eliminar";
            btnEliminar.addEventListener('click', () => fila.remove());
            celda.appendChild(btnEliminar);
        }
    });
};


