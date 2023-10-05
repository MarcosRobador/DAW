"use strict"

function pow(x, n) {
    return Math.pow(x, n); 
}

function potencia() {
    // Solicita al usuario tanto n como x 
    let x = prompt("Introduce el numero que quieres elevar:");
    let n = prompt("Introduce por cuanto quieres elevar el numero " + x + " :");

    // Para asegurarme que sean numeros enteros 
    let x2 = parseInt(x);
    let n2 = parseInt(n);
    
    // !isNaN(): verifica que x2 y x1 sean numeros enteros para realizar la condidicon
    if (!isNaN(x2) && !isNaN(n2)) {
        
        let resultado = pow(x2, n2);
        alert("El resultado es: " + resultado);
    } else {
        // En el caso de que las conversiones fallaran
        alert("Por favor, introduce números válidos.");
    }
}

// Llama a la funcion para que se ejecute segun abras el program y asi te pida x y n
potencia();
