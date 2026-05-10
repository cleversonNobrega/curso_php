<?php

require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/model/Genero.php";

echo "Bem-vindo(a) ao ScreenMatch";

$filme = new Filme();
$filme->defi
/*
$filme->nome = 'Thor - Ragnarok';
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';
*/

$filme-> avalia(10);
$filme-> avalia(10);
$filme-> avalia(10);
$filme-> avalia(10);

var_dump($filme);

echo $filme->media();