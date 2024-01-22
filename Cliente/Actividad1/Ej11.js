"use strict"

function calcularArea() {

    let figura = prompt("Introduce la figura (triangulo, circulo, rectangulo):");
  
    switch (figura) {
      case 'triangulo':
        // Si la figura es un triángulo solicita la base y la altura
        let base = parseFloat(prompt("Ingresa la base:"));
        let altura = parseFloat(prompt("Ingresa la altura:"));
  
        // Confirma si los datos estan vien metidos
        if (!isNaN(base) && !isNaN(altura)) {
          let area = 0.5 * base * altura;
  
          alert("El área del triángulo es: " + area);
        } 
        else {
          alert("Introduce los datos correctamente");
        }
        break;
  
      case 'circulo':
        
        let radio = parseFloat(prompt("Ingresa el radio:"));
  
        if (!isNaN(radio)) {
          let area = Math.PI * Math.pow(radio, 2);
  
          alert("El area del circulo es: " + area);
        } 
        else {
          alert("Introduce el radio correctamente");
        }
        break;
  
      case 'rectangulo':
        let lado1 = parseFloat(prompt("Ingresa el primer lado:"));
        let lado2 = parseFloat(prompt("Ingresa el segundo lado:"));
  
        if (!isNaN(lado1) && !isNaN(lado2)) {
          let area = lado1 * lado2;
  
          alert("El area del rectangulo es: " + area);
        } else {
          alert("Ingresa los datos correctamente");
        }
        break;
  
      default:
        // Si no ha introducido la figura correctamente
        alert("Vuelve a introducir la figura.");
    }
  }
  
  calcularArea();
  