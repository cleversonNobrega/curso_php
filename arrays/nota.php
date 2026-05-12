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



foreach ($notas as $aluno => $nota){
   if($aluno === 'Ana'){
      return true;
   }
}

echo 'vinicius fez a prova';
var_dump(array_key_exists('Ana', $notas));


echo 'Alguem tirou dez?' . PHP_EOL;
var_dump(in_array(10, $notas));


10 == '10';

$nota['ana'];

echo array_search(10, $nota);