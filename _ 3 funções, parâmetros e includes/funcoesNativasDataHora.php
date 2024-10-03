<?php

echo date('d/m/Y H:i:s');

echo '<br/>';
echo '<hr>';

$data = '2024-03-07';

$time = strtotime($data);

//DESSA MANEIRA VC CONSEGUE FORMATAR A DATA PRA SER MOSTRADA DA FORMA MAIS CORRETA
echo date('d/m/Y', $time);

echo '<br/>';
echo '<hr>';

//EXISTE UMA FORMA MAIS ABREVIADA PARA FAZER ESSA FORMATAÇÃO DA DATA
$data2 = '2024-04-29';

echo date('d/m/Y', strtotime($data2));