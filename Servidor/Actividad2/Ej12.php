<?php

abstract class Trabajador {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;
    protected array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, int $edad, array $telefonos = []) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->telefonos = $telefonos;
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

    public function getTelefonos() {
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono) {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos() {
        return implode(', ', $this->telefonos);
    }

    abstract public function calcularSueldo(): float;
}

class Empleado extends Trabajador {
    protected float $salario;
    protected int $horasTrabajadas;
    protected float $tarifaHora;

    public function __construct(string $nombre, string $apellidos, int $edad, float $salario, int $horasTrabajadas, float $tarifaHora, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salario = $salario;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaHora = $tarifaHora;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getHorasTrabajadas() {
        return $this->horasTrabajadas;
    }

    public function getTarifaHora() {
        return $this->tarifaHora;
    }

    public function calcularSueldo(): float {
        return $this->salario + ($this->horasTrabajadas * $this->tarifaHora);
    }
}

class Gerente extends Trabajador {
    protected float $salario;

    public function __construct(string $nombre, string $apellidos, int $edad, float $salario, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function calcularSueldo(): float {
        return $this->salario + ($this->salario * $this->edad / 100);
    }
}

// Ejemplo de uso
$empleado = new Empleado("Juan", "Pérez", 30, 3000, 40, 10);
$gerente = new Gerente("Marcos", "Robador", 45, 5000);

echo "Empleado:\n";
echo "Nombre completo: " . $empleado->getNombreCompleto() . "\n";
echo "Sueldo: " . $empleado->calcularSueldo() . " €\n";
echo "Teléfonos: " . $empleado->listarTelefonos() . "\n";

echo "Gerente:\n";
echo "Nombre completo: " . $gerente->getNombreCompleto() . "\n";
echo "Sueldo: " . $gerente->calcularSueldo() . " €\n";
echo "Teléfonos: " . $gerente->listarTelefonos() . "\n";
