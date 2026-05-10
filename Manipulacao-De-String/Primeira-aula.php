<?php

$nome = 'Cleverson Felipe';
$ehDaMinhaFamilia = str_contains($nome, 'Felipe');

if($ehDaMinhaFamilia){
   echo "$nome é da minha família". PHP_EOL;
}else{
    echo "$nome não é da minha fsmília". PHP_EOL;
}