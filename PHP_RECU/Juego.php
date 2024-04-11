<?php

class Juego extends Soporte {
    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        public string $consola,
        private int $minNumJugadores,
        private int $maxNumJugadores
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraJugadoresPosibles(): string {
        if ($this->minNumJugadores === $this->maxNumJugadores) {
            return $this->minNumJugadores === 1 ? "Para un jugador" : "Para " . $this->minNumJugadores . " jugadores";
        } else {
            return "De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores";
        }
    }

    public function muestraResumen(): string {
        $resumen = parent::muestraResumen();
        $resumen .= "Consola: " . $this->consola . "\n" .
                    $this->muestraJugadoresPosibles() . "\n";
        return $resumen;
    }
}