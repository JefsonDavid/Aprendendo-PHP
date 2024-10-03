<?php

//ESSA É A FUNÇÃO ANÔNIMA
$dizimo = function($valor){
    return $valor * 0.1;
};

echo $dizimo(120);
echo '<hr>';

//ESSA É UMA FUNÇÃO FLECHA(ARROW FUNCTION)
$diz = fn($valor) => $valor * 0.1;

echo $diz(982);
echo '<hr>';

//VC PODE PASSAR MAIS DE UM ARGUMENTO
$somar = fn(int $n1, int $n2 = 0) => $n1+$n2;

echo $somar(4, 3);