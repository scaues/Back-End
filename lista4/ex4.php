<?php

$email = "jp@gmail.com";
$senha = "123";
$status = "desativado";

echo "bem vindo! <br><br><br>";

if($email=="jp@gmail.com"&&$senha == "123" && $status == "ativa"){
    echo "acesso liberado <br>";
    header("location:https://www.facebook.com");
}
else{
    echo" email ou senha invalido";
}

?>