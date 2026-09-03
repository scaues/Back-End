<?php

echo '<h1 style="color:darkred;text-align:center;"><br>BloodCave</h1><br>';
echo "1 - jogar<br>";
echo "2 - Ver personagem<br>";
echo "3 - Ver hanking<br>";
echo "4 - Configurações<br><br>";
echo "5 - Sair<br><br>";

$opcao = 2;

switch ($opcao) {
    case 1:
        echo '<h1 style="text-align:center; color: green;">Jogar</h1>';
        break;
    case 2:
        echo '<h1 style="color:red;text-align:center;">Personagens<br><br></h1><br>';
        echo '<h2 style="text-align:center; color: blue;">Salomao<br><hr><br>Filipe (Aurudo)<br><hr><br>Talles</h2>';
        break;
    case 3:
        echo '<h1 style="color:blue;text-align:center;">Hanking</h1><br>';
        echo '<h2 style="text-align:center;color: red;"> 1 Talles<br><br>2 Filipe<br><br>3 Salomao</h2>';
        break;
    case 4:
        echo '<h2 style="text-align:center;color: black;">Entrando em configurações...</h2>';
        break;
    case 5:
        echo '<h2 style="text-align:center;color: black;">Saindo...</h2>';
        break;
    default:
        echo '<h1 style="text-align:center;color: red;">Opçao invalida :(</h1>';
}

?>