<?php

require_once 'Soporte.php';

class Cliente {
    private array $soportesAlquilados = [];

    public function __construct(
        public string $nombre,
        private int $numero,
        private int $maxAlquilerConcurrente = 3,
        private int $numSoportesAlquilados = 0,
    ) {}

    // Getter para el número de cliente
    public function getNumero(): int {
        return $this->numero;
    }

    // Setter para el número de cliente
    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    // Getter para el número de soportes alquilados
    public function getNumSoportesAlquilados(): int {
        return $this->numSoportesAlquilados;
    }

    // Método para mostrar un resumen del cliente
    public function muestraResumen(): void {
        echo "Cliente: $this->nombre\n";
        echo "Número de alquileres: " . count($this->soportesAlquilados) . "\n";
    }

    // Método para comprobar si el cliente tiene un soporte alquilado
    public function tieneAlquilado(Soporte $s): bool {
        return in_array($s, $this->soportesAlquilados);
    }

    // Método para alquilar un soporte
    public function alquilar(Soporte $s): bool {
        if ($this->tieneAlquilado($s)) {
            echo "El cliente ya tiene alquilado este soporte.\n";
            return false;
        }
        if ($this->numSoportesAlquilados >= $this->maxAlquilerConcurrente) {
            echo "El cliente ha alcanzado el máximo de alquileres concurrentes.\n";
            return false;
        }

        $this->soportesAlquilados[] = $s;
        $this->numSoportesAlquilados++;
        echo "Soporte alquilado con éxito.\n";
        return true;
    }

    // Método para devolver un soporte
    public function devolver(int $numSoporte): bool {
        if (isset($this->soportesAlquilados[$numSoporte])) {
            unset($this->soportesAlquilados[$numSoporte]);
            $this->numSoportesAlquilados--;
            echo "Soporte devuelto con éxito.\n";
            return true;
        } else {
            echo "El soporte especificado no estaba alquilado por este cliente.\n";
            return false;
        }
    }

    // Método para listar los alquileres del cliente
    public function listarAlquileres(): void {
        echo "El cliente tiene " . count($this->soportesAlquilados) . " alquiler(es).\n";
        foreach ($this->soportesAlquilados as $key => $soporte) {
            echo "Alquiler " . ($key + 1) . ": " . $soporte->titulo . "\n";
        }
    }
}

