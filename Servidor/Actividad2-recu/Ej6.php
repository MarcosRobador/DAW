<?php

class Empleado {
    private static $sueldoTope = 3333;
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
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

    public function mostrarInformacionHtml(): string {
        $html = "<p>";
        $html .= "Nombre: " . $this->getNombreCompleto() . "<br>";
        $html .= "Sueldo: " . $this->getSueldo() . "€<br>";
        $html .= "Paga impuestos: " . ($this->debePagarImpuestos() ? "Sí" : "No") . "<br>";

        if (!empty($this->telefonos)) {
            $html .= "Teléfonos:<ol>";
            foreach ($this->telefonos as $telefono) {
                $html .= "<li>" . $telefono . "</li>";
            }
            $html .= "</ol>";
        }

        $html .= "</p>";
        return $html;
    }
}

// Uso de la clase
$empleado = new Empleado("Marcos", "Robador", 3500);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);
echo $empleado->mostrarInformacionHtml();
?>
