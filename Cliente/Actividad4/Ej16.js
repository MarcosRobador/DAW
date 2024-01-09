/* En cada iteracion del bucle, se suma 0.2 a la variable i. 
Los numeros de punto flotante en JavaScript no pueden representar todos los 
valores decimales de manera precisa. En cada suma, se produce un 
pequeño error de redondeo que se acumulan. Debido a esta acumulacion de errores, 
i nunca alcanza exactamente el valor de 10 */
"use strict"

let i = 0;
while (i != 10) {
i += 0.2;
}