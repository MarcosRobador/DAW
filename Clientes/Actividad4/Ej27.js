"use strict"

function camelize(str) {
    // Dividir la cadena en un array utilizando el guion bajo como separador
    const words = str.split('_');
  
    // Convertir la primera letra de cada palabra después del guion bajo
    for (let i = 1; i < words.length; i++) {
      words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
    }
  
    // Unir las palabras en un solo string sin guiones bajos
    const camelCaseStr = words.join('');
  
    return camelCaseStr;
  }
  
  alert(camelize("background_color")); // 'backgroundColor'
  alert(camelize("list_style_image")); // 'listStyleImage'
  alert(camelize("_webkit_transition")); // 'WebkitTransition'
  