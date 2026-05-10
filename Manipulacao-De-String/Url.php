<?php

$url = 'https://alura.com.br';

if(str_starts_with($url, 'https')){
    echo 'e um url segura';
}else{
    echo 'nao e um url seeguda';
}

echo PHP_EOL;

if(str_ends_with($url, '.br')){
    echo 'e um dominio do brasil';
}else{
    echo 'nao e um dominio do brasil';
}