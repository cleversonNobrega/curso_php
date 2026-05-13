<?php

$notasBimestre1 = [
    'vinicius' => 6,
    'joao' => 8,
    'Ana' => 10,
    'Robeto' => 7, 
    'Maria' => 9,
];

$notasBimestre2 = [
    'vinicius' => 8,
    'joao' => 10,
    'Ana' => 7,
    'Robeto' => 9, 
    'Maria' => 8.5,
];

$alunoFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunoFaltantes));
var_dump(array_values($alunoFaltantes));