<?php

class Seria extends Titulo{
    public function __construct(
        string $nome, 
        int $anoLancamento, 
        Genero $genero, 
        public readonly int $temporada,
        public readonly int $epsiodioPorTemporadas, 
        public readonly int $minutosPorEpsidio
    ) {
       parent::__construct($nome, $anoLancamento, $genero);
    }

    
}