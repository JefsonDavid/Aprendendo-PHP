<?php


//DEIXANDO UM PARAMETRO OPCIONAL
function somar($n1, $n2, $n3 = 0){
    $total = $n1 + $n2 + $n3;
    return $total;
}

$x = somar(2, 3);
$y = somar(1, 4, 2);
$w = somar($x, $y);

echo 'O valor total da somar entre '.$x.' e '.$y.' é: '.$w;
echo "<hr>";

//DETERMINANDO O TIPO DE PARAMETRO QUE A FUÇÃO VAI RECEBER
function mais(int $x, int $y=0, int $z=0){
    $total = $x+$y+$z;
    return $total;
}

$a = mais(7, 3, 4);

echo'<prev>';
echo $a;
echo'</prev>';
echo "<hr>";

//DETERMINANDO O TIPO DE PARAMETRO QUE A FUÇÃO VAI RECEBER
function manda(string $a, string $b=null, string $c=null){//AQUI SÓ VAI RECEBER SE O PARAMETRO FOR UMA STRING E CASO NÃO TENHA NADA A VARIÁVEL VAI SER NULA
    $total = $a.=$b.=$c;
    return $total;
}

$j = manda('Jefson ', 'David ');

echo'<prev>';
echo $j;
echo'</prev>';