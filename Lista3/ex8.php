<?php

$nome = "talles look melons";
$senha= "talles";
$confirmarsenha = "talles";
$data_nasc = "07/9/2000";

if($nome != "" && $senha == $confirmarsenha){
    echo "bem vindo $nome sua data de nascimento é $data_nasc";
}
else{
    echo "nome ou senha invalidos";
}

?> fecha essa coisa na proxima vez