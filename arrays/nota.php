<?php

$notas = [
   'Ana' => 10, 
   'Joao' => 8, 
   'Maria' => 9, 
   'Roberto' => 7, 
   'Vinicius' =>  6
];

ksort($notas);
var_dump($notas);

if(is_array($notas)){
   echo 'sim e um array';
}


foreach($array as $numeral => $nomeNumero){
   echo "$numero em portugues e: $nomeNumero" . PHP_EOL;
}

echo "Total:" . count($array) . PHP_EOL;


var_dump(array_is_list($array));