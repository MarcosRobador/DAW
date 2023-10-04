<?php

class Coche {
    private $ruedas;
    private $marchas;
    private $color;
    private $modelo;
    private $marca;
    private $matricula;
    private $potencia;
    private $puertas;

    public function __construct($ruedas, $marchas, $color, $modelo, $marca, $matricula, $potencia, $puertas) {
        $this->ruedas = $ruedas;
        $this->marchas = $marchas;
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->puertas = $puertas;
    }

    public function setColor($c) {
        $this->color = $c;
    }

    public function imprimir() {
        echo $this->ruedas . "<br>";
        echo $this->marchas . "<br>";
        echo $this->color . "<br>";
        echo $this->modelo . "<br>";
        echo $this->marca . "<br>";
        echo $this->matricula . "<br>";
        echo $this->potencia . "<br>";
        echo $this->puertas . "<br>";
    }
}

$coche1 = new Coche(4, true, "azul", "Compact", "BMW", "0702DYV", 900.0, 4);
$coche1->setColor("rojo");
$coche1->imprimir();

?>
