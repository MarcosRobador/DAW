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

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
}

// Uso de la clase
Empleado::setSueldoTope(3500);
$empleado1 = new Empleado("Marcos", "Robador");
$empleado2 = new Empleado("Pedro", "Mateos", 3600);

echo "Sueldo tope para impuestos: " . Empleado::getSueldoTope() . "\n";
echo "Empleado 1 - Nombre completo: " . $empleado1->getNombreCompleto() . ", Sueldo: " . $empleado1->getSueldo() . ", Paga impuestos: " . ($empleado1->debePagarImpuestos() ? "Sí" : "No") . "\n";
echo "Empleado 2 - Nombre completo: " . $empleado2->getNombreCompleto() . ", Sueldo: " . $empleado2->getSueldo() . ", Paga impuestos: " . ($empleado2->debePagarImpuestos() ? "Sí" : "No") . "\n";
?>
