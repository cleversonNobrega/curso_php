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