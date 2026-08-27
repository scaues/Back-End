<?php

$aposta = 10;
$numero = 5;
$numero_sorteado = 5;

if($numero == $numero_sorteado+1){
    echo "vc ganhou R$:", $aposta * 5;
}
else{
    echo "quase acertou, seu numero:$numero <br>";
    echo "numero sorteado:", $numero_sorteado+1;
}

?>