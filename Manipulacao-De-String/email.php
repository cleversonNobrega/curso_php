<?php


function geraEmail(string $nome): void{
    $conteudoEmail = <<<FINAL
    'Ola, $nome
    estamos passando para avisa-los'  ;
    FINAL;

    echo $conteudoEmail;
}

geraEmail('felipe');