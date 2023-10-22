"use strict"

function makeUser() {
    return {
    name: "Jhon",
    ref: this
    };
    }
    let user = makeUser();
    alert( user.ref.name );