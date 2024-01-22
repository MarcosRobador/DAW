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

    public static function toHtml(Persona $p): string {
        $html = "<p>";
        $html .= "Nombre: " . $p->getNombreCompleto() . "<br>";
        $html .= "</p>";
        return $html;
    }
}

class Empleado extends Persona {
    private static $sueldoTope = 3333;
    private float $sueldo;
    private array $telefonos = [];

    // ... (resto de los métodos de Empleado)

    public static function toHtml(Persona $p): string {
        $html = parent::toHtml($p);

        if ($p instanceof Empleado) {
            $html .= "<p>";
            $html .= "Sueldo: " . $p->getSueldo() . "€<br>";
            $html .= "Paga impuestos: " . ($p->debePagarImpuestos() ? "Sí" : "No") . "<br>";

            $telefonos = $p->getTelefonos();
            if (!empty($telefonos)) {
                $html .= "Teléfonos:<ol>";
                foreach ($telefonos as $telefono) {
                    $html .= "<li>" . $telefono . "</li>";
                }
                $html .= "</ol>";
            }

            $html .= "</p>";
        }

        return $html;
    }
}

// Uso de las clases
$persona = new Persona("Marcos", "Robador");
$empleado = new Empleado("Pedro", "Mateos", 3500);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo Persona::toHtml($persona);
echo Empleado::toHtml($empleado);
?>
