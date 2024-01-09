"use strict"
let elem = document.getElementById("id");
let text = "Buenos dias";

//createTextNode
elem.append(document.createTextNode(text));
console.log('Con createTextNode:', elem.innerHTML);

// Limpia elem
elem.innerHTML = '';

//innerHTML
elem.innerHTML = text;
console.log('Con innerHTML:', elem.innerHTML);

elem.innerHTML = '';

//textContent
elem.textContent = text;
console.log('Con textContent:', elem.innerHTML);
