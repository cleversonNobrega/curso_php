<?php

class Filme  extends Titulo{
    public function __construct(
        string $nome, 
        int $anoLancamento, 
        Genero $genero, 
        public readonly int $duracaoEmMinutos
    ) {
        parant::__construct($nome, $anoLancamento, $genero);
    }
}
