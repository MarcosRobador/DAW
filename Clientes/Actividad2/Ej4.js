"use strict"

let menu = {
    width: 200,
    height: 300,
    title: "Mi menú"
    };

    function multiplyNumeric(obj) {
        
        //Recorre las propiedades del objeto
        for (let key in obj) {
          //Si ls propiedad es un numero, lo multiplica por 2
          if (typeof obj[key] === 'number') {
            obj[key] *= 2;
          }
        }
      }
   //Necesario para poder realizar la funcion en el objeto menu   
   multiplyNumeric(menu);

   alert("width = " + menu.width + " height = " + menu.height);
   