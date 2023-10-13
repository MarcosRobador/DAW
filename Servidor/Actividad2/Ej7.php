<?php

class Persona {
    

    public function __construct(

        protected string $nombre,
        protected string $apellidos

    ){}

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellidos;
    }
}

class Empleado extends Persona {

    private static $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellidos, float $salario, array $telefonos = []) {
        parent::__construct($nombre, $apellidos);
        $this->salario = $salario;
        $this->telefonos = $telefonos;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getTelefonos() {
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono) {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos() {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos() {
        $this->telefonos = [];
    }

    public function debePagarImpuesto(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    
}

// Ejemplo de uso
$empleado = new Empleado("Marcos", "Robador", 3000);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Nombre completo: " . $empleado->getNombreCompleto() . "\n";
echo "Salario: " . $empleado->getSalario() . " €\n";
echo "Teléfonos: " . $empleado->listarTelefonos() . "\n";
echo "<p>Debe pagar impuestos: " . ($empleado-> debePagarImpuesto() ? "Si" : "No") . "</p>";
