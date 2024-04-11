<?php
class Cliente {
    private array $numSoportesAlquilados = [];

    public function __construct(
        public string $nombre,
        private int $numero,
        private int $maxAlquilerConcurrente = 3
    ) {}


    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    public function getNumSoportesAlquilados(): int {
        return count($this->numSoportesAlquilados);
    }

    public function addSoporteAlquilado(Soporte $soporte): void {
        $this->numSoportesAlquilados[] = $soporte;
    }


    public function muestraResumen(): void {
        echo "Cliente: {$this->nombre}\n <br><br>";
        echo "Cantidad de Alquileres: {$this->getNumSoportesAlquilados()}\n<br><br>";
    }

    public function tieneAlquilado(Soporte $s): bool {
        foreach ($this->numSoportesAlquilados as $soporte) {
            if ($soporte === $s) {
                return true;
            }
        }
        return false;
    }
    
    public function alquilar(Soporte $s): bool {
        if ($this->tieneAlquilado($s)) {
            echo "El soporte ya está alquilado por este cliente.\n<br>";
            return false;
        }
    
        if ($this->getNumSoportesAlquilados() >= $this->maxAlquilerConcurrente) {
            echo "El cliente ha alcanzado el límite de alquileres concurrentes.\n<br>";
            return false;
        }
    
        $this->addSoporteAlquilado($s);
        echo "El soporte ha sido alquilado con éxito.\n<br>";
        return true;
    }
    
    public function devolver(int $numSoporte): bool {
        if (!isset($this->numSoportesAlquilados[$numSoporte])) {
            echo "El cliente no tiene alquilado el soporte con el número {$numSoporte}.\n<br>";
            return false;
        }
    
        unset($this->numSoportesAlquilados[$numSoporte]);
        echo "El soporte con el número {$numSoporte} ha sido devuelto con éxito.\n<br>";
        return true;
    }

    public function listarAlquileres(): void {
        echo "El cliente tiene " . $this->getNumSoportesAlquilados() . " alquileres:\n<br>";
        foreach ($this->numSoportesAlquilados as $numSoporte => $soporte) {
            echo "Número de soporte: {$numSoporte}\n<br>";
        }
    }
    
}