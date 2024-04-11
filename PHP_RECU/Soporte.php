<?php
abstract class Soporte {
    protected static int $IVA = 21;

    // Al hacer la clase abstracta, indicamos que está destinada únicamente a ser una clase base.
    // Esto significa que no se pretende que Soporte sea instanciada por sí misma,
    // sino que sirva como plantilla para clases derivadas que representarán 
    // soportes específicos (como CintaVideo, Disco, Juego, etc.).
    // Estas clases derivadas heredarán las propiedades y métodos de Soporte
    // y podrán implementar o sobrescribir sus propios métodos según sea necesario.

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
