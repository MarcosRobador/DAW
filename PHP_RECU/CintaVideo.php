<?php

class CintaVideo extends Soporte {
    public function __construct(
        public string $titulo,
        protected int $numero,
        protected float $precio,
        private int $duracion
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraResumen(): string {
        $resumen = parent::muestraResumen();
        $resumen .= "Duración: " . $this->duracion . " minutos<br>";
        return $resumen;
    }
}

