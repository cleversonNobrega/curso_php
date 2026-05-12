<?php

$telefones = ['(24) 99999 - 9999 ', ' (21) 99999 - 9999 ', '(24) 2222 - 2222'];

foreach($telefones as $telefone){
    $telefoneValido = preg_match(
       '[0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/'
    );
    if($telefoneValido){
        echo 'telefone valido' . PHP_EOL;
    }else {
        echo 'telefone invalido' . PHP_EOL;
    }
}