<?php

$nome ="jdjsbtrs";
$acesso =3;

if($acesso == 1 ){
    echo "bem vindo $nome vc tem acesso basico no sistema";
}
elseif($acesso == 3){
    echo "Bem vindo $nome vc tem acesso intermediario ao sistema";
}
else{
    echo "erro numero de acesso invalidado";
}
?>
