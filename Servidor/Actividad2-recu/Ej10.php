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

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function __toString(): string {
        return "Nombre: " . $this->getNombreCompleto() . ", Edad: " . $this->edad;
    }
}

class Empleado extends Persona {
    private static $sueldoTope = 3333;
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function debePagarImpuestos(): bool {
        return $this->getEdad() > 21 && $this->sueldo > self::$sueldoTope;
    }

    public function __toString(): string {
        $telefonosStr = empty($this->telefonos) ? "Ninguno" : implode(", ", $this->telefonos);
        return parent::__toString() . ", Sueldo: " . $this->sueldo . "€, Teléfonos: " . $telefonosStr;
    }
}

// Uso de las clases
$persona = new Persona("Marcos", "Robador", 30);
$empleado = new Empleado("Pedro", "Mateos", 25, 3500);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo $persona . "\n";
echo $empleado . "\n";
?>
