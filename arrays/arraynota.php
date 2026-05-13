<?php

$aluno2021 = [
    'vinicius', 
    'joao', 
    'ana', 
    'maria', 
    'roberto',
];


$novosAluno = [
    'patricia', 
    'Nico', 
    'pedro'
];

$alunos2022 = [
    'ricador', 
    'joana', 
    'felipe'
];


$alunos23 = array_merge($aluno2021, $novosAluno);

var_dump($alunos23);