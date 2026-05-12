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
    if($nota1['nota'] > $Nnota2['nota'] ){
        return -1;
    }

    if($nota2['nota']  > $nota1['nota'] ){
        return 1;
    }

    return 0;
}


usort($notas ,'orderNotas');

var_dump($notas);