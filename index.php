<?php

require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/model/Genero.php";
require __DIR__ . "/src/Calculo/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao ScreenMatch";

$filme = new Filme(
 'Thor - Ragnarok',
 2021,
 Genero::superHeori,
 180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);

var_dump($filme);

echo $filme->media() ."\n";
echo $filme->anoLancamento ."\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

echo $serie->anoLancamento ."\n";

$serie->avalia(8);

echo $serie->media();

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);


echo "Para essa maratona, voce precisa de duracao em muinutos";