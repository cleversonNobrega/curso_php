<?php

class Filme {

    private array $notas;

    public function __construct(
        private readonly string $nome,
        private readonly string $anoLancamento,
        private readonly string $genero
    ){
        $this->notas = [];
    }
}
       
    

 

 