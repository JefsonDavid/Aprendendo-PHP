<?php

//PASSANDO O VALOR POR MEIO DE VARÁVEIS
function somar($n1, $n2){
    $total = $n1+$n2;
    return $total;
}

$x = 3;
$y = 2;

$soma = somar($x, $y);

echo $soma;
echo '<hr>';


function mais($n1, $n2, $total){
    //print_r($n1);
    $total = $n1+$n2;
};


$i = 3;
$j = 5;
$valorFinal = 0;

mais($i, $j, $valorFinal);

echo $valorFinal;
echo '<hr>';

$lista = [4,9,2];

sort($lista);

print_r($lista);

