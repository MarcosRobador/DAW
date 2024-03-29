"use strict"

let ladder = {
    step: 0,
    up() {
      this.step++;
      return this; // Devuelve 'this' para permitir llamadas encadenadas
    },
    down() {
      this.step--;
      return this;
    },
    showStep() {
      alert(this.step);
      return this;
    }
  };
  
  ladder.up().up().down().showStep().down().showStep();
  