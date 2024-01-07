<?php

abstract class Trabajador {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;
    protected array $telefonos = [];

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

    abstract public function calcularSueldo(): float;

    public function __toString(): string {
        $telefonosStr = empty($this->telefonos) ? "Ninguno" : implode(", ", $this->telefonos);
        return "Nombre: " . $this->getNombreCompleto() . ", Edad: " . $this->edad . ", Teléfonos: " . $telefonosStr;
    }
}

class Empleado extends Trabajador {
    private float $horasTrabajadas;
    private float $pagoPorHora;

    public function __construct(string $nombre, string $apellidos, int $edad, float $horasTrabajadas, float $pagoPorHora) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->pagoPorHora = $pagoPorHora;
    }

    public function calcularSueldo(): float {
        return $this->horasTrabajadas * $this->pagoPorHora;
    }
}

class Gerente extends Trabajador {
    private float $salarioBase;

    public function __construct(string $nombre, string $apellidos, int $edad, float $salarioBase) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->salarioBase = $salarioBase;
    }

    public function calcularSueldo(): float {
        return $this->salarioBase + ($this->salarioBase * $this->edad / 100);
    }
}

// Uso de las clases
$empleado = new Empleado("Marcos", "Robador", 25, 40, 15);
$gerente = new Gerente("Pedro", "Mateos", 45, 3000);

$empleado->anyadirTelefono(123456789);
$gerente->anyadirTelefono(987654321);

echo $empleado . "\n";
echo "Sueldo Empleado: " . $empleado->calcularSueldo() . "\n";

echo $gerente . "\n";
echo "Sueldo Gerente: " . $gerente->calcularSueldo() . "\n";
?>
