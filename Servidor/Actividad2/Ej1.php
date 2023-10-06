<?php

class  Empleado{

    public function __construct(
       
        protected string $nombre,
        protected string $apellidos,
        protected float $sueldo
    ){}

    public function getNombre() {
        return $this->nombre = $nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos = $apellidos;
    }
    
    public function setNombreApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getSueldo() {
        $this->sueldo = $sueldo;
    }
    
    public function setSueldo($sueldo) {
        return $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string{
        return $this-> nombre ." ". $this-> apellidos;
    }

    public function debePagarImpuesto(): bool{
        return $this-> $sueldo > 3333;
    }
}
 
$empleado = new Empleado("Marcos", "Robador", 1200);

echo "<p> Nombre completo: " . $empleado-> getNombreCompleto() . "</p>";
// ? "Si" : "No": condicional que se utiliza para saber si se cumple la condicion dentro 
// del metodo debePagarImpuesto(), si es true devuelve Si y si es false No
echo "Debe pagar impuestos: " . ($empleado-> debePagarImpuesto() ? "Si" : "No") . "\n";

?>