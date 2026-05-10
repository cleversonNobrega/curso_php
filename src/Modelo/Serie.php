<?php

class Seria extends Titulo{
    public function __construct(
        public readonly int $temporada,
        public readonly int $episodioPorTemporada,
        public readonly int $minutoPorEpidio
    ) {
       
    }

    
}