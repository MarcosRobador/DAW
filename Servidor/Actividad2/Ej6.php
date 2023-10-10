<?php

class Empleado {

    private static $sueldoTope = 3333;

    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected float $sueldo = 1000, 
        private array $telefonos = []
    ) {}

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function getTelefonos() {
        return $this->telefonos;
    }

    public function setTelefonos(array $telefonos) {
        $this->telefonos = $telefonos;
    }

    // Getter para obtener el valor de sueldoTope
    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    // Setter para modificar el valor de sueldoTope
    public static function setSueldoTope(float $sueldoTope): void {
        self::$sueldoTope = $sueldoTope;
    }
    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuesto(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }
   
    // implode: une los numeros del array en una cadena, separada por comas y espacios
    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    // Establece el array como vacio, de manera que cuando se llame al metodo, sirva para eliminar los telefonos
    public function vaciarTelefonos(): void {
        $this->telefonos = array();
    }

    // Metodo html
    public static function toHtml(Empleado $emp): string {
        //Se obtienen los datos necesarios con sus respectivos metodos
        $nombreCompleto = $emp->getNombreCompleto();
        $sueldo = $emp->getSueldo();
        $telefonos = $emp->getTelefonos();
        $debePagarImpuestos = $emp->debePagarImpuesto() ? "Si" : "No";

        // Parrafos html para mostrar los datos
        $html = "<p>Nombre completo: $nombreCompleto</p>";
        $html .= "<p>Sueldo: $sueldo €</p>";
        $html .= "<p>Debe pagar impuestos: $debePagarImpuestos</p>";
        $html .= "<p>Teléfonos:</p>";
        // Lista ordenada
        $html .= "<ol>";

        // Recorre el array de telefonos
        foreach ($telefonos as $telefono) {
            // Agrega los telefonos a la lista
            $html .= "<li>$telefono</li>";
        }

        // Cierra la lista
        $html .= "</ol>";
       
        // Devuelve la cadena html que muestra los datos
        return $html;
    }
}

$empleado = new Empleado("Marcos", "Robador");
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

// Llamar al metodo toHtml y mostrar el resultado
$html = Empleado::toHtml($empleado);

echo $html;

?>