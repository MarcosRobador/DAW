<?php

class Soporte {
    public $titulo;
    protected $numero;
    private $precio;
    private static $IVA = 21;

    public function __construct($titulo, $numero, $precio) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

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

// Test
$soporte = new Soporte("Película", 123, 10);
$soporte->muestraResumen();
echo "Precio con IVA: " . $soporte->getPrecioConIva();
?>
