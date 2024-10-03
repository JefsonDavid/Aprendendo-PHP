<?php

function somar($n1, $n2){
    $total = $n1+$n2;
    return $total;
}

$soma = Somar(10, 5);

echo $soma;

echo "<hr>";

function mais($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

$a = mais(2, 3);
$b = mais(5, 2);
$c = mais($a, $b);

echo $c;        