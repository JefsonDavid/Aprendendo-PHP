<?php

// FUNÇÃO ANÔNIMA PARA MOSTRAR 10% DO VALOR ENVIADO
$dizimo = function(int $valor){
    return $valor * 0.1;
};

//echo $dizimo(90);

$funcao = $dizimo;

echo $funcao(80);
echo '<hr>';

$funcaoAnonima = function(){
    //....................
};

algumaFuncao(10, $funcaoAnonima());

echo algumaFuncao();