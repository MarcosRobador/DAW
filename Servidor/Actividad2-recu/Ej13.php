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

    public function anyadirTrabajador(Trabajador $trabajador): void {
        $this->trabajadores[] = $trabajador;
    }

    public function listarTrabajadoresHtml(): string {
        $html = "<h2>Trabajadores de " . $this->nombre . "</h2>";
        foreach ($this->trabajadores as $trabajador) {
            $html .= $trabajador->toHtml($trabajador) . "<br>";
        }
        return $html;
    }

    public function getCosteNominas(): float {
        $costeTotal = 0.0;
        foreach ($this->trabajadores as $trabajador) {
            $costeTotal += $trabajador->calcularSueldo();
        }
        return $costeTotal;
    }
}

// Uso de la clase Empresa
$empresa = new Empresa("Ecotech", "Avenida de las ciencias");
$empleado = new Empleado("Marcos", "Robador", 25, 40, 15);
$gerente = new Gerente("Pedro", "Mateos", 45, 3000);

$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($gerente);

echo $empresa->listarTrabajadoresHtml();
echo "Coste total en nóminas: " . $empresa->getCosteNominas() . "€";
?>
