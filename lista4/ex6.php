<?php

$idade = 20;
$deficiente = "nao";
$gestante = "nao";

if($idade >= 60 || $gestante == "sim" || $deficiente == "sim"){
    echo "seu atendimento é prioritario";
}
else{
    echo "seu atendimento é normal";
}
?>