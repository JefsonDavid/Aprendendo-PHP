<?php

$primeiroNumero = filter_input(INPUT_POST, 'primeiro');
$segundoNumero = filter_input(INPUT_POST, 'segundo');

if($primeiroNumero && $segundoNumero){
    // $soma = $primeiroNumero+$segundoNumero;
    // echo $soma;^

    echo somar($primeiroNumero, $segundoNumero);
    
}else{
    //echo 'Não foi possível fazer a soma';
    header("location: index.php");
    exit;
}

function somar($a, $b){
    $total = $a+$b;
    // echo $total;
    return $total;
}

