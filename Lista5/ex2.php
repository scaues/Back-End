<?php

$nota1 = 4;
$nota2 = 10;
$nota3 = 6;

$media = ($nota1 + $nota2 + $nota3)/3;

if($media >= 6){
    echo " aprovado, sua media é $media";
}
else{
    echo "reprovado, sua media foi $media, e nao atingiu a nota 6";
}
?>