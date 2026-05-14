<?php

$string = 'valor textuais';
$int = 27;
$float = 15.5;
$bool = false;

$array = [$string, $int, $float];

$valorNumerico = '27';
$valorInteiro = (int) $valorNumerico;

$valorDecimal = 27.5;
$valorInteiro = (int) $valorDecimal;

var_dump($valorInteiro);
var_dump((bool) '');


var_dump((int) '27 bananas');