<?php

class Empleado {
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

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuesto(): bool {
        return $this->sueldo > 3333;
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

}

// No recibe un tercer parametro, por lo tanto, el sueldo sera 1000
$empleado = new Empleado("Marcos", "Robador");
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

// ? "Si" : "No": condicional que se utiliza para saber si se cumple la condicion dentro 
// del metodo debePagarImpuesto(), si es true devuelve Si y si es false No
echo "<p>Nombre completo: " . $empleado->getNombreCompleto() . "</p>";
echo "<p>Sueldo: " . $empleado->getSueldo() . "€</p>";
echo "Telefonos: " . $empleado->listarTelefonos() . "</p>";

$empleado->vaciarTelefonos();

echo "Telefonos actualizados: " . $empleado->listarTelefonos();


?>