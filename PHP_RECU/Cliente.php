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
            echo "El soporte ya está alquilado por este cliente.\n<br><br>";
            return false;
        }

        if ($this->getNumSoportesAlquilados() >= $this->maxAlquilerConcurrente) {
            echo "No se puede alquilar más soportes, se ha alcanzado el límite de alquileres concurrentes.\n<br><br>";
            return false;
        }

        $this->addSoporteAlquilado($s);
        echo "Se ha alquilado el soporte '{$s->titulo}' al cliente '{$this->nombre}'.\n<br><br>";
        return true;
    }

    public function devolver(int $numSoporte): bool {
        $soporteEncontrado = false;
    
        foreach ($this->numSoportesAlquilados as $key => $soporte) {
            if ($soporte->numero === $numSoporte) {
                unset($this->numSoportesAlquilados[$key]);
                $soporteEncontrado = true;
                break;
            }
        }
    
        if ($soporteEncontrado) {
            echo "El soporte número $numSoporte ha sido devuelto correctamente.\n";
            return true;
        } else {
            echo "El soporte número $numSoporte no estaba alquilado por este cliente.\n";
            return false;
        }
    }
    
    public function listarAlquileres(): void {
        $numAlquileres = $this->getNumSoportesAlquilados();
    
        if ($numAlquileres === 0) {
            echo "El cliente '{$this->nombre}' no tiene ningún soporte alquilado actualmente.\n<br><br>";
        } else {
            echo "El cliente '{$this->nombre}' tiene $numAlquileres alquileres:\n<br><br>";
    
            foreach ($this->numSoportesAlquilados as $soporte) {
                echo "- {$soporte->titulo}\n";
            }
        }
    }
    
    public function muestraResumen(): void {
        echo "Nombre: {$this->nombre}\n";
        echo "Número de cliente: {$this->numero}\n";
        echo "Cantidad de alquileres: {$this->getNumSoportesAlquilados()}\n";
        
        if ($this->getNumSoportesAlquilados() > 0) {
            echo "Soportes alquilados:\n";
            foreach ($this->numSoportesAlquilados as $soporte) {
                echo "- {$soporte->titulo}\n";
            }
        } else {
            echo "No tiene soportes alquilados actualmente.\n";
        }
    }
    

}