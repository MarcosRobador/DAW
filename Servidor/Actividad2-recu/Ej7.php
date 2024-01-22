<?php

class Persona {
    protected string $nombre;
    protected string $apellidos;

    public function __construct(string $nombre, string $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }
}

class Empleado extends Persona {
    private static $sueldoTope = 3333;
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos);
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevoSueldoTope): void {
        self::$sueldoTope = $nuevoSueldoTope;
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

    public static function toHtml(Empleado $emp): string {
        $html = "<p>";
        $html .= "Nombre: " . $emp->getNombreCompleto() . "<br>";
        $html .= "Sueldo: " . $emp->getSueldo() . "€<br>";
        $html .= "Paga impuestos: " . ($emp->debePagarImpuestos() ? "Sí" : "No") . "<br>";

        $telefonos = $emp->getTelefonos();
        if (!empty($telefonos)) {
            $html .= "Teléfonos:<ol>";
            foreach ($telefonos as $telefono) {
                $html .= "<li>" . $telefono . "</li>";
            }
            $html .= "</ol>";
        }

        $html .= "</p>";
        return $html;
    }
}

// Uso de las clases
$empleado = new Empleado("Marcos", "Robador", 3500);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo Empleado::toHtml($empleado);
?>
