"use strict"

function checkSpam(str) {
    // Convierte la cadena a minusculas
    str = str.toLowerCase();
    
    // Comprueba si la cadena contiene "viagra" o "xxx".
    if (str.includes("viagra") || str.includes("xxx")) {
      return true;
    } else {
      return false;
    }
  }
  
  alert(checkSpam('compra ViAgRA ahora')); 
  alert(checkSpam('xxxxx gratis')); 
  alert(checkSpam("coneja inocente")); 
  