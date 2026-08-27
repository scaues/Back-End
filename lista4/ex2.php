<?php

$cortesia = "nao";
$ingresso ="sim";

echo "Bem vindo ao camarote <br>";

if ($ingresso == "sim" || $cortesia == "sim"){
    echo "pode entrar e curtir";
}
else{
    echo "sem ingresso!";
}

?>