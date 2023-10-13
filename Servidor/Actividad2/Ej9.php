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

    public static function toHtml(Persona $p): string {
        $nombreCompleto = $p->getNombreCompleto();
        $edad = $p->getEdad();
        return "<p>Nombre completo: $nombreCompleto</p><p>Edad: $edad años</p>";
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

    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            $nombreCompleto = $p->getNombreCompleto();
            $edad = $p->getEdad();
            $sueldo = $p->getSalario();
            $debePagarImpuestos = $p->debePagarImpuesto() ? "Si" : "No";
            $html = "<p>Nombre completo: $nombreCompleto</p>";
            $html .= "<p>Edad: $edad años</p>";
            $html .= "<p>Salario: $sueldo €</p>";
            $html .= "<p>Debe pagar impuestos: $debePagarImpuestos</p>";
            return $html;
        } else {
            return parent::toHtml($p);
        }
    }
}

// Ejemplo de uso
$persona = new Persona("Juan", "Pérez", 25);
$empleado = new Empleado("Marcos", "Robador", 30, 3000);

echo Empleado::toHtml($persona); // Muestra información de la persona
echo Empleado::toHtml($empleado); // Muestra información detallada del empleado
