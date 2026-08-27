<?php

$email = "jp@gmail.com";
$senha = "123";

echo "bem vindo ao facebook <br>";

if($email == "jp@gmail.com"  && $senha == "123"){
    echo "acesso liberado <br>";
    header("location: https://www.facebook.com");
}
else{
    echo"email ou senha invalido!";
}

?>