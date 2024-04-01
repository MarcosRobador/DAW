<?php

class Disco extends Soporte {
    public $idiomas;
    private $formatoPantalla;

    public function __construct($titulo, $numero, $idiomas, $formatoPantalla) {
        $this->titulo = $titulo;
        $this->numero = $numero;
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

?>
