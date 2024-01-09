"use strict"

//Objeto vacio
let user = {
    name: "John Snow",
    surname: "Sam Sagaz"
};

//Cambio de valor de nombre
user.name = "Peter Pan";
//Quito la propiedad nombre
delete user.name;
alert(user.name);
