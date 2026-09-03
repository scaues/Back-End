<?php

function verificaridade ($idade)
{
    if ($idade >= 18){
        return "maior de idade. Pode tirar carta<br><br>";
    }else {
        return "menor de idade .só de uber <br><br>";
    }
}
echo verificaridade (17);
echo verificaridade (44);
echo verificaridade (15);
echo verificaridade (18);

?>