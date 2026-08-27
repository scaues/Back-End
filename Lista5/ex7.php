<?php

$peso = 70;
$altura = 1.78;
$resultado = $peso / ($altura * $altura) ;

if($resultado >=19  && $resultado <= 24){
    echo "seu imc esta no peso normal";
}
elseif($resultado >= 25 && $resultado <= 29){
    echo "vc ta em sobrepeso de acordo com o imc";
}
elseif($resultado >= 30 && $resultado<= 34){
    echo "vc ta em obesidade grau 1";
}
elseif($resultado >= 31 && $resultado <= 39){
    echo "vc ta em sobrepeso de acordo com o imc";
}
elseif($resultado >=40){
    echo "vc ta em obesidade de grau 3 de acordo com o imc";
}
else{
    echo "erro";
}
?>