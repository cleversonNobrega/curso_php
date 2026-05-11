<?php

$email = 'felipe@gmail.com';
$senha = '123';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome:'. $nome  . PHP_EOL;
echo 'sobrenome:'. $sobrenome  . PHP_EOL;

$csv = 'Cleverson Felipe, 24, cleversonFelipe@gmail.com.br';
var_dump(explode,'',$csv);


echo trim($email) . PHP_EOL;