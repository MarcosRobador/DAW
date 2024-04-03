<?php

class Soporte {
    private static int $IVA = 21;

    public function __construct(
        public string $titulo,
        protected int $numero,
        private float $precio
    ) {}

    public function getPrecio() {
        return $this->precio;
    }

    public function getPrecioConIva() {
        return $this->precio * (1 + self::$IVA / 100);
    }

    public function getNumero() {
        return $this->numero;
    }

    public function muestraResumen() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Número: " . $this->numero . "<br>";
        echo "Precio: " . $this->precio . "<br>";
    }
}

