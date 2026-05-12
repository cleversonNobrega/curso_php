<?php

$notas = [
    [
        'aluna' => 'maria',
        'nota' => 10,
    ],
    [
        'aluna' => 'vinicius',
        'nota' => 6
    ],
    [
        'aluna' => 'ana',
        'nota' => 9
    ]
];


function orderNotas(array $nota1, $nota2) : int {
    return $nota2['nota'] <=> $nota1['nota'];
}


usort($notas ,'orderNotas');
var_dump($notas);