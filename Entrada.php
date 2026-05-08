<?php
    
$saldo = 1_0000;
$titularConta = 'felipe';

do{
    echo "1 - Consultar saldo atual\n";
    echo "2 - Sacar valor\n";
    echo "3 - Depositar valor\n";
    echo "4 - sair\n";

    $opcao = (int) fgets(STDIN);

    switch($opcao){
        case 1:
            echo"*************************\n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: R$ $saldo\n";
            echo"*************************\n";
        break;
        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorSacar = (float) fgets(STDIN);
            if($valorSacar > $saldo){
                echo "Saldo insuficiente\n";
            }else{
                $saldo -= $valorSaca;
            }
        break;
        case 3:
            echo "Quanto deseja depoostirar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $SALDO +=  $valorADepositar; 
        break;
        case 4:
            echo "Saindo!!!!";
        break;
        default:
            echo "opção inválida";
        break;
    };    
}while( $opcao != 4);