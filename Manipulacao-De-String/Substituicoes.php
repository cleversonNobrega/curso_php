<?php

$texto = 'texto com qualquer coisa poxa e caramba'; 
echo str_replace('poxa', '****', $texto) . PHP_EOL;

echo strtr($texto, 'poxa', '***');