<?php
//ESSA FUNÇÃO VAI CONTAR QUANTOS ELEMENTOS TEM DENTRO DO ARRAY
$lista = ['nome1', 'nome2', 'nome3', 'nome4'];

echo "Total: ".count($lista);

echo '<hr>';
//======================================================================================

$lista2 = ['Jefson', 'Joao', 'Mauro', 'Maria', 'Gesila', 'Gesiel'];
$aprovados = ['Jefson', 'Mauro', 'Maria', 'Gesiel'];


$reprovados = array_diff($lista2, $aprovados);

print_r($reprovados);
echo '<hr>';
//======================================================================================
//FAZENDO FILTRAGEM DE ARRAY    
$numeros = [10,20,24,91,18];

//A FUNÇÃO array_filter VAI OS ITEM DO ARRAY QUE ESTÃO DENTRO DA CONDIÇÃO if CRIADO POR MEIO DA FUNÇÃO ANÔNIMA.
$filtrados = array_filter($numeros, function($item){
    if($item > 30){
        return true;
    }else{
        return false;
    }
});

print_r($filtrados);

echo '<hr>';
//======================================================================================

//O array_map() É USADO PARA RODAR UMA FUNÇÃO EM CADA ITEM DO ARRAY
$number = [10,20,30,50,70];

//USANDO O array_map PARA MULTIPLICAR TODOS OS ITENS DO ARRAY POR 2
$dobrados = array_map(function($item){
    return $item * 2;
}, $number);

print_r($dobrados);

echo '<hr>';
//======================================================================================
//ESSA FUNÇÃO CAI RETIRAR O ÚLTIMO ITEM DO ARRAY
$n = [10,20,24,91,18];

array_pop($n);

print_r ($n);
echo '<hr>';
//======================================================================================
//ESSA FUNÇÃO CAI RETIRAR O PRIMEIRO ITEM DO ARRAY
$n2 = [10,20,30,40,50];

array_shift($n2);

print_r($n2);

echo '<hr>';
//======================================================================================

//ESSA FUNÇÃO VAI BUSCAR ALGUMA COISA DENTRO DO ARRAY
$n3 = [10,20,30,40,50];

//$nn = 10;

if(in_array(20, $n3)){
    echo 'Existe!';
}else{
    echo 'Não existe!';
};
echo '<hr>';
//======================================================================================

//ESSA FUNÇÃO SERVE PARA ORDENAR UM ARRAY
$n4 = [10,30,50,20,40];

sort($n4);

print_r($n4);

echo '<hr>';
//======================================================================================
$n5 = [10,30,50,20,40];

rsort($n5);

print_r($n5);

echo '<hr>';
//======================================================================================
//ESSA FUNÇÃO VAI ORDENAR OS NÚMEROS DO ARRAY, PORÉM AS CHAVES VÃO CONTINUAR AS ORIGINAIS

$n6 = [10,20,24,91,18];

asort($n6);

echo 'A CHAVE 3 É: '.$n6[3];

print_r($n6);

echo '<hr>';
//======================================================================================

$nomes = ['Jefson', 'David', 'Borges'];

$nome = implode(' ', $nomes);

echo $nome;