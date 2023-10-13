<?php

class Persona {
    protected string $nombre;
    protected string $apellidos;

    public function __construct(string $nombre, string $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function toHtml(Persona $p): string {
        // Implementación en la clase base Persona
        $nombreCompleto = $p->getNombreCompleto();
        return "<p>Nombre completo: $nombreCompleto</p>";
    }
}

class Empleado extends Persona {
    private static $sueldoTope = 3333;
    protected float $salario;
    private array $telefonos = [];

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
        return $this->salario > self::$sueldoTope;
    }

    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            // Aquí podemos acceder a las propiedades y métodos de Empleado
            $nombreCompleto = $p->getNombreCompleto();
            $sueldo = $p->getSalario();
            $debePagarImpuestos = $p->debePagarImpuesto() ? "Si" : "No";
            $html = "<p>Nombre completo: $nombreCompleto</p>";
            $html .= "<p>Salario: $sueldo €</p>";
            $html .= "<p>Debe pagar impuestos: $debePagarImpuestos</p>";
            return $html;
        } else {
            // Si no es una instancia de Empleado, simplemente mostramos el nombre completo
            return parent::toHtml($p);
        }
    }
}

// Ejemplo de uso
$persona = new Persona("Juan", "Pérez");
$empleado = new Empleado("Marcos", "Robador", 3000);

echo Empleado::toHtml($persona); // Muestra solo el nombre completo
echo Empleado::toHtml($empleado); // Muestra información detallada del empleado
