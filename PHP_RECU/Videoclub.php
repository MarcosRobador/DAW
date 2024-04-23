<?php

class Videoclub {
    private array $productos = []; // Array de objetos Soporte
    private array $socios = []; // Array de objetos Cliente
    private int $numProductos = 0;
    private int $numSocios = 0;

    public function __construct(private string $nombre) {}

    private function incluirProducto(Soporte $producto): void {
        $this->productos[] = $producto;
        $this->numProductos++;
    }

    public function incluirCintaVideo(string $titulo, float $precio, int $duracion): void {
        $cinta = new CintaVideo($titulo, $this->numProductos + 1, $precio, $duracion);
        $this->incluirProducto($cinta);
    }

    public function incluirDvd(string $titulo, float $precio, array $idiomas, string $formatoPantalla): void {
        $dvd = new Disco($titulo, $this->numProductos + 1, $precio, $idiomas, $formatoPantalla);
        $this->incluirProducto($dvd);
    }

    public function incluirJuego(string $titulo, float $precio, string $consola, int $minNumJugadores, int $maxNumJugadores): void {
        $juego = new Juego($titulo, $this->numProductos + 1, $precio, $consola, $minNumJugadores, $maxNumJugadores);
        $this->incluirProducto($juego);
    }

    public function incluirSocio(string $nombre, int $maxAlquilerConcurrente = 3): void {
        $socio = new Cliente($nombre, $this->numSocios + 1, $maxAlquilerConcurrente);
        $this->socios[] = $socio;
        $this->numSocios++;
    }

    public function listarProductos(): void {
        foreach ($this->productos as $producto) {
            echo $producto->muestraResumen();
        }
    }

    public function listarSocios(): void {
        foreach ($this->socios as $socio) {
            echo $socio->muestraResumen();
        }
    }

    public function alquilarSocioProducto(int $numeroCliente, int $numeroSoporte): void {
        $cliente = $this->buscarSocioPorNumero($numeroCliente);
        $soporte = $this->buscarProductoPorNumero($numeroSoporte);

        if ($cliente && $soporte && !$cliente->tieneAlquilado($soporte)) {
            $cliente->alquilar($soporte);
        }
    }

    public function buscarSocioPorNumero(int $numeroCliente): ?Cliente {
        foreach ($this->socios as $socio) {
            if ($socio->getNumero() === $numeroCliente) {
                return $socio;
            }
        }
        return null;
    }

    public function buscarProductoPorNumero(int $numeroSoporte): ?Soporte {
        foreach ($this->productos as $producto) {
            if ($producto->getNumero() === $numeroSoporte) {
                return $producto;
            }
        }
        return null;
    }
}