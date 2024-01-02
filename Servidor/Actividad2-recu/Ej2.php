<?php

class Empleado {
    private $nombre;
    private $apellidos;
    private $sueldo;
    private $telefonos = array();

    public function __construct($nombre, $apellidos, $sueldo) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos() {
        return $this->sueldo > 3333;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = array();
    }
}

// Uso de la clase
$empleado = new Empleado("Marcos", "Robador", 3500);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);
echo "Nombre completo: " . $empleado->getNombreCompleto() . "\n";
echo "Telefonos: " . $empleado->listarTelefonos() . "\n";
$empleado->vaciarTelefonos();
echo "Telefonos después de vaciar: " . $empleado->listarTelefonos() . "\n";
?>
