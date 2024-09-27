<?php

$valor = 3001;
$clube = "cadastrado";

if($clube = "cadastrado" and $valor = 3000){
    $desconto = $valor * 0.2;
    $valor = $valor - $desconto;
    echo "Você recebeu 20% de desconto, seu valor com desconto é de $valor";
}
else{
    echo "Você não é cadastrado";
}
?>