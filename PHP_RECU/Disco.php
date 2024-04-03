<?php

class Disco extends Soporte {    
    
    public function __construct(
    $titulo,
    $numero,
    $precio,
    public string $idiomas,
    private string $formatoPantalla
    
) {
    parent::__construct($titulo, $numero, $precio);
}

    public function muestraResumen() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Número: " . $this->numero . "<br>";
        echo "Idiomas: " . $this->idiomas . "<br>";
        echo "Formato de pantalla: " . $this->formatoPantalla . "<br>";
    }
}
