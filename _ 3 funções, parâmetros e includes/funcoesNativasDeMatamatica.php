<?php
$numero = -8.4;
//A FUNÇÃO ABS SERVE PRA MOSTRAR O VALOR ABSOLUTO DE UM NÚMERO
echo abs($numero);
echo '<hr>';

//VAI MOSTAR O VALOR DE PI
echo pi();
echo '<hr>';

//ARREDONDANDO O NÚMERO PARA BAIXO
$n1 = 2.7;

echo floor($n1);
echo '<hr>';

//ARREDONDANDO O NÚMERO PARA CIMA
$n2 = 2.7;

echo ceil($n2);
echo '<hr>';

//ARREDONDANDO O NÚMERO PARA CIMA OU PARA BAIXO DEPENDENDO DO NUMERO
$n3 = 2.5;

echo round($n3);
echo '<hr>';

//ARREDONDANDO O NÚMERO PARA CIMA OU PARA BAIXO DEPENDENDO DO NUMERO
$n3 = 2.5;
//VC TBM PODE DEFINIR QUANTAS CASAS DECIMAIS VAI USAR
echo round($n3, 2);
echo '<hr>';

//FUNÇÃO QUE GERA UM NÚMERO ALEATÓRIO
$aleatorio = rand(3, 9);

echo $aleatorio;
echo '<hr>';

// MOSTRAR O MAIOR VALOR DE UMA LISTA
$lista = [1, 4, 9, 8];

echo max($lista);
echo '<hr>';


// MOSTAR O MENOR VALOR DE UMA LISTA
    $list = [2, 7, 3, 5];

    echo min($list);