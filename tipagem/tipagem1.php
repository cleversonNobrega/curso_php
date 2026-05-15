<?php

$string = 'valor textuais';
$int = 27;
$float = 15.5;
$bool = false;

$array = [$string, $int, $float];

$valorNumerico = '27';
$valorInteiro1 = (int) $valorNumerico;

$valorDecimal = 27.5;
$valorInteiro2 = (int) $valorDecimal;

var_dump($valorInteiro1);
var_dump($valorInteiro2);

var_dump((bool) '');

var_dump((int) '27 bananas');

if($string){
    echo 'verdadeiro';
}else{
    echo 'false';
}

var_dump('valor numerico' == '0');

var_dump('27' > 28);

require 'screen-match/src/funcoes.php';