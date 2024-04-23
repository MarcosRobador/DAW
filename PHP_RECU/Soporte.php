<?php
require_once 'Resumible.php';
abstract class Soporte implements Resumible {
    protected static int $IVA = 21;

    public function __construct(
        public string $titulo,
        protected int $numero,
        protected float $precio
    ) {}

    public function getNumero(): int {
        return $this->numero;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getPrecioConIva(): float {
        return $this->precio * (1 + self::$IVA / 100);
    }

    public function muestraResumen(): string {
        return "<br> Título: " . $this->titulo . "<br>" .
               "Número: " . $this->numero . "<br>" .
               "Precio: " . $this->precio . "<br>" .
               "Precio con IVA: " . $this->getPrecioConIva() . "<br>";
    }
}