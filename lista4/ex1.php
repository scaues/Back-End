<?php

$idade = 16;
$ingresso ="sim";

echo "Bem vindo ao Cineamor <br>";

if ($idade >= 18 && $ingresso== "sim"){
    echo "pode entrar e assistir o filme";
}
else{
    echo "idade nao permitida ou sem ingresso!";
}

?>