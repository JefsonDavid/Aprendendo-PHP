<?php

$patinhos = 3;


//VALIDAÇÃO DA QUANTIDADE   
if(!is_numeric($patinhos) || $patinhos < 1 || $patinhos > 10){
    echo "O valor é inválido! Digite um valor entre 1 e 10";
    exit;
}

for($i = $patinhos; $i > 0; $i--){
    
    if($i==1){
        echo '1 patinho foi passear </br>';
    }else{
        echo $i.' patinhos forram passear </br>';
    }
    echo 'Além das montanhas </br>';
    echo 'Para brincar </br>';
    echo 'A mamãe gritou: Quá, quá, quá, Quá </br>';
    if($i-1 == 1){
        echo 'Mas só 1 patinho voltou de lá </br>';
    }if($i-1 == 0){
        echo 'Mas nenhum patinho voltou de lá </br>';
    }if($i-1>1){
        echo 'Mas só '.($i-1).' patinhos voltaram de lá </br>';
    }
    //echo 'Mas só '.($i-1).' patinhos voltaram de lá </br>';
    echo  '</br>';
}

echo 'A mamãe patinha foi procurar </br>';
echo 'Além das motanhas </br>';
echo 'Na beira do mar </br>';
echo 'A mamãe gritou: Quá, quá, quá, Quá </br>';
echo 'E os '.$patinhos.' patinhos voltaram de lá </br>'; 





//5 patinhos forram passear
//Além das montanhas
//Para brincar
//A mamãe gritou: Quá, quá, quá, Quá
//Mas só 4 patinhos voltaram de lá