"use strict"

let salaries = {
    Harry: 100,
    Ron: 160,
    Hermione: 130
    };

   let sum = 0;
   // Recorre las propiedades del objeto
   for (let key in salaries){
    //Suma los salarios
    sum += salaries[key];
   }

   alert(sum);