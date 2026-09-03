<?php

echo '<h1 style="color: red;">NETFLIX</h1><br>';
echo "1 - Assistir filme<br>";
echo "2 - Assistir serie<br>";
echo "3 - ver minha lista<br>";
echo "4 - sair<br><br>";

$opcao = 9;

switch ($opcao) {
    case 1:
        echo '<h2 style="text-align:center; color: red;">Abrindo filmes</h2>';
        break;
    case 2:
        echo '<h2 style="text-align:center;color: red;">Abrindo serie</h2>';;
        break;
    case 3:
        echo '<h2 style="text-align:center;color: red;">Abrindo minha lista</h2>';;
        break;
    case 4:
        echo '<h2 style="text-align:center;color: red;">Saindo...</h2>';;
        break;
    default:
        echo '<h2 style="text-align:center;color: red;">Opçao invalida :(</h2>';;
}

?>