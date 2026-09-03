<?php


echo "1 bem vindo a alares internet <br>";
echo "2 segunda via da fatura <br>";
echo "3 falar com atendente<br>";
echo "4 sair<br><br>";
$opcao = 2;

switch ($opcao) {
    case 1:
        echo "vc escolheu: suporte tecnico";
        break;
    case 2:
        echo "vc escolheu segunda via da fatura";
        break;
    case 3:
        echo "vc sera encaminhado pra um atendente";
        break;
    case 4:
        echo "obrigado por utilizar a alares";
        break;
    default:
        echo "opçao invalida";
}
?>