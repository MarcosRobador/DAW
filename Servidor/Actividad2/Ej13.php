<?php

class Empresa {
    private string $nombre;
    private string $direccion;
    private array $trabajadores = [];

    public function __construct(string $nombre, string $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    public function anyadirTrabajador(Trabajador $t): void {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml(): string {
        $html = "<h3>Trabajadores de " . $this->nombre . "</h3>";
        foreach ($this->trabajadores as $trabajador) {
            $html .= Trabajador::toHtml($trabajador) . "<br>";
        }
        return $html;
    }

    public function getCosteNominas(): float {
        $costeTotal = 0;
        foreach ($this->trabajadores as $trabajador) {
            $costeTotal += $trabajador->calcularSueldo();
        }
        return $costeTotal;
    }
}

// Ejemplo de uso
$empresa = new Empresa("Mi Empresa", "Calle Principal, 123");

$empleado1 = new Empleado("Juan", "Pérez", 30, 3000, 40, 10);
$empleado2 = new Empleado("Ana", "Gómez", 25, 2500, 35, 12);
$gerente = new Gerente("Marcos", "Robador", 45, 5000);

$empresa->anyadirTrabajador($empleado1);
$empresa->anyadirTrabajador($empleado2);
$empresa->anyadirTrabajador($gerente);

echo "<h2>Información de la empresa:</h2>";
echo "Nombre: " . $empresa->getNombre() . "<br>";
echo "Dirección: " . $empresa->getDireccion() . "<br>";

echo $empresa->listarTrabajadoresHtml();
echo "Coste total de nóminas: " . $empresa->getCosteNominas() . " €";
