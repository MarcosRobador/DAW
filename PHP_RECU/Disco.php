<?php

class Disco extends Soporte {
    public $idiomas;
    private $formatoPantalla;


    public function __construct($titulo, $numero, $precio, $idiomas, $formatoPantalla) {
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
    }

    public function muestraResumen() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Número: " . $this->numero . "<br>";
        echo "Idiomas: " . $this->idiomas . "<br>";
        echo "Formato de pantalla: " . $this->formatoPantalla . "<br>";
    }
}
