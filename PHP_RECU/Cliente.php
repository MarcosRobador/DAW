<?php

class Cliente {
    private array $soportesAlquilados = [];
    public string $nombre;
    private int $numero;
    private int $maxAlquilerConcurrente;

    public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente = 3) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    // Getter para el número de cliente
    public function getNumero(): int {
        return $this->numero;
    }

    // Método para verificar si un soporte ya está alquilado
    public function tieneAlquilado(Soporte $s): bool {
        foreach ($this->soportesAlquilados as $soporteAlquilado) {
            if ($soporteAlquilado->getNumero() === $s->getNumero()) {
                return true;
            }
        }
        return false;
    }

    // Método para alquilar un soporte
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

    // Método para devolver un soporte
    public function devolver(Soporte $s): bool {
        foreach ($this->soportesAlquilados as $index => $soporteAlquilado) {
            if ($soporteAlquilado->getNumero() === $s->getNumero()) {
                unset($this->soportesAlquilados[$index]);
                $this->soportesAlquilados = array_values($this->soportesAlquilados); // Reindexa el array
                echo "El soporte ha sido devuelto correctamente.\n";
                return true;
            }
        }
        echo "El soporte no se encontraba alquilado.\n";
        return false;
    }

    // Método para listar los soportes alquilados
    public function listarAlquileres(): void {
        if (count($this->soportesAlquilados) === 0) {
            echo "No hay soportes alquilados.\n";
            return;
        }
        echo "Soportes alquilados:\n";
        foreach ($this->soportesAlquilados as $soporte) {
            echo "- " . $soporte->getTitulo() . "\n";
        }
    }

    // Método para mostrar un resumen del cliente
    public function muestraResumen(): void {
        echo "<br><br>Cliente: " . $this->nombre . "<br>";
        echo "Número de cliente: " . $this->numero . "<br>";
        echo "Alquileres concurrentes máximos permitidos: " . $this->maxAlquilerConcurrente . "<br>";
        $this->listarAlquileres();
    }
}
