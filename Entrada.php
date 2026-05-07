<?php
    
$saldo = 1_0000;
$titularConta = 'felipe';

echo "******************************\n";
echo "Titular: $titularConta\n";
echo "Saldo atual: R$ $saldo\n";
echo "******************************\n";

echo "1. Consultar saldo atual\n";
echo "2. Sacar valor\n";
echo "3. Depositar valor\n";
echo "4. Sair\n";


$opcao = (int) fgets(STDIN);

switch($opcao){
    case 1:
        echo "******************************\n";
        echo "Titular: $titularConta\n";
        echo "Saldo atual: R$ $saldo\n";
        echo "******************************\n";
    break;
    case 2:
        echo "******************************\n";
        echo "Titular: $titularConta\n";
    break;
    case 3:
        echo "******************************\n";
        echo "Titular: $titularConta\n";
        echo "Saldo atual: R$ $saldo\n";
    break;
      case 4:
        echo "******************************\n";
        echo "Qual  valor deseja sacar?\n";
    break;
    

}