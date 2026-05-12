<?php

$array = [
    1 => 'um',
    false => 'dois',
    1.9 => 'tres'
];

$contador = 0;

foreach($array as $numeral => $nomeNumero){
    echo "$numeral em portugues e: $nomeNumero" . PHP_EOL;
    $contador++;
}

echo "Total:".count($array) . PHP_EOL;