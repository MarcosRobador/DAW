<?php

class Disco extends Soporte {
    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        public array $idiomas,
        private string $formatoPantalla
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraResumen(): string {
        $resumen = parent::muestraResumen();
        $resumen .= "Idiomas: " . implode(', ', $this->idiomas) . "<br>" .
                    "Formato de pantalla: " . $this->formatoPantalla . "<br>";
        return $resumen;
    }
}