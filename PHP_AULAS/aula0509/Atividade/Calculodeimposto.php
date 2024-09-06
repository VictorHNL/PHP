<?php

$usuario = $_POST["nome"];
$rendaoriginal=$_POST["rendaoriginal"];

if ($rendaoriginal > 50000) {
    $renda = $rendaoriginal * 0.2;
    echo "Valor do imposto é de R$ $renda <br>";

    $valordoimposto = $rendaoriginal - $renda;
    echo "Valor da renda sobre o imposto é de R$$valordoimposto";

} elseif ($rendaoriginal > 20000 && $rendaoriginal <= 50000) { //O operador lógico && serve para verificar se o valor está entre um e outro.
    $renda = $rendaoriginal * 0.1;
    echo "Valor do imposto é de R$ $renda <br>";

    $valordoimposto = $rendaoriginal - $renda;
    echo "Valor da renda sobre o imposto é de R$ $valordoimposto";

} else {
    echo "$usuario, você está isento de imposto";
}

?>
