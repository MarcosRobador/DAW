<?php

class Juego extends Soporte {
    
    public function __construct(
        $titulo,
        $numero,
        $precio,
        public string $consola,
        private int $minNumJugadores,
        private int $maxNumJugadores
    ) {
        parent::__construct($titulo, $numero, $precio);
    }


    public function muestraJugadoresPosibles() {
        if ($this->minNumJugadores == 1 && $this->maxNumJugadores == 1) {
            echo "Para un jugador";
        } elseif ($this->minNumJugadores == $this->maxNumJugadores) {
            echo "Para " . $this->minNumJugadores . " jugadores";
        } else {
            echo "De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores";
        }
    }

    public function muestraResumen() {
        parent::muestraResumen();
        echo "Consola: " . $this->consola . "<br>";
        echo "Jugadores posibles: ";
        $this->muestraJugadoresPosibles();
        echo "<br>";
    }
}