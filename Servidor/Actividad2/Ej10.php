<?php

class Persona {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellidos;
    }

    public function __toString(): string {
        return "Nombre: " . $this->nombre . "\n" .
               "Apellidos: " . $this->apellidos . "\n" .
               "Edad: " . $this->edad . " años\n";
    }
}

class Empleado extends Persona {
    private static $sueldoTope = 3333;
    protected float $salario;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, int $edad, float $salario, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad);
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
        return $this->edad > 21 && $this->salario > self::$sueldoTope;
    }

    public function __toString(): string {
        $impuestos = $this->debePagarImpuesto() ? "Si" : "No";
        return parent::__toString() .
               "Salario: " . $this->salario . " €\n" .
               "Debe pagar impuestos: " . $impuestos . "\n" .
               "Teléfonos: " . $this->listarTelefonos() . "\n";
    }
}

// Ejemplo de uso
$persona = new Persona("Juan", "Pérez", 25);
$empleado = new Empleado("Marcos", "Robador", 30, 3000);

echo $persona;
echo $empleado;
