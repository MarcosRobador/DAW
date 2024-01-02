<?php

class Empleado {
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
        return $this->sueldo > 3333;
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
$empleado1 = new Empleado("Marcos", "Robador");
$empleado2 = new Empleado("Pedro", "Mateos", 3500);

echo "Empleado 1 - Nombre completo: " . $empleado1->getNombreCompleto() . ", Sueldo: " . $empleado1->getSueldo() . "\n";
echo "Empleado 2 - Nombre completo: " . $empleado2->getNombreCompleto() . ", Sueldo: " . $empleado2->getSueldo() . "\n";
?>
