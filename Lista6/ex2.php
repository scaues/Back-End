<?php

$opcao = 2;
$saldo = 500;

switch ($opcao){
    case 1:
        echo "seu saldo é : R$ $saldo";
        break;
    case 2:
        echo "vc escolheu sacar dinheiro";
        break;
    case 3:
        echo "voce escolheu: escolheu depositar dinheiro";
        break;
    case 4:
        echo "voce escolheu consultar extrato";
        break;
    default:
        echo "opção invalida";
}
?>