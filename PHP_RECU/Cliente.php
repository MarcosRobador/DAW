<?php
class Cliente {
    private array $soportesAlquilados = [];

    public function __construct(
        public string $nombre,
        private int $numero,
        private int $maxAlquilerConcurrente = 3
    ) {}

    public function tieneAlquilado(Soporte $s): bool {
        foreach ($this->soportesAlquilados as $soporteAlquilado) {
            if ($soporteAlquilado->getNumero() === $s->getNumero()) {
                return true;
            }
        }
        return false;
    }

    public function alquilar(Soporte $s): bool {
        if ($this->tieneAlquilado($s)) {
            echo "El soporte ya está alquilado.\n";
            return false;
        }
        if (count($this->soportesAlquilados) >= $this->maxAlquilerConcurrente) {
            echo "Has alcanzado el máximo de alquileres concurrentes.\n";
            return false;
        }
        $this->soportesAlquilados[] = $s;
        echo "Soporte alquilado con éxito.\n";
        return true;
    }

    public function devolver(int $numSoporte): bool {
        foreach ($this->soportesAlquilados as $index => $soporteAlquilado) {
            if ($soporteAlquilado->getNumero() === $numSoporte) {
                unset($this->soportesAlquilados[$index]);
                $this->soportesAlquilados = array_values($this->soportesAlquilados); // Reindex the array
                echo "El soporte ha sido devuelto correctamente.\n";
                return true;
            }
        }
        echo "El soporte no se encontraba alquilado.\n";
        return false;
    }

    public function listarAlquileres(): void {
        echo "El cliente " . $this->nombre . " tiene " . count($this->soportesAlquilados) . " alquiler(es) activo(s):\n";
        foreach ($this->soportesAlquilados as $soporteAlquilado) {
            echo "- " . $soporteAlquilado->muestraResumen();
        }
    }

    public function muestraResumen(): void {
        echo "Cliente: " . $this->nombre . "\n";
        echo "Número de cliente: " . $this->numero . "\n";
        echo "Alquileres concurrentes máximos permitidos: " . $this->maxAlquilerConcurrente . "\n";
        $this->listarAlquileres();
    }
}

