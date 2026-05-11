<?php

$anoNascimento = '2007';
$idade = 2026 - $anoNascimento;

echo $idade . PHP_EOL;


if($anoNascimento === 2007){
    echo 'Sim' . PHP_EOL;
}else{
    echo 'Nao' . PHP_EOL;
}