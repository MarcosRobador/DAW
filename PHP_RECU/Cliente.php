<?php

class Cliente {
  
    public function __construct(
        public string $nombre,
        private int $numero,
        private int $maxAlquilerConcurrente = 3
    ) {}
}
