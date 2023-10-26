"use strict"

/* En JavaScript, el metodo toFixed() redondea hacia el numero mas cercano,
y si hay un empate, redondea hacia el número par mas cercano.
En este caso, 6.35 se encuentra justo a mitad de camino entre 6.3 y 6.4, y 
el estandar de redondeo a numeros pares elige 6.3 como resultado.  */

// Redondear hacia arriba (ceil)
let num = 6.35;
let numRedond = Math.ceil(num * 10) / 10;
alert(numRedond); 
