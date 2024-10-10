
<?php

//Essa é a forma normal de fazer um array
//$array = [1, 2, 3];

//Usando a função Range
//Dentro da função RANGE vc vai colocar dois parâmetros o primeiro é o que vai começar e o segundo o que vai terminar.
//Esses parâmetros podem ser números ou letras

$array = range(1, 10);

foreach($array as $item){
    echo $item."<br/>";
}


echo "=================================================================================================<br/>";
//E vc ainda tem um treceiro parâmetro que serve como multiplicador como por exemplo se vc quiser os 
//números de 1 a 20 pulando de 2 em 2
$array2 = range(1, 20, 2);

foreach($array2 as $item){
    echo $item."<br/>";
}


echo "=================================================================================================<br/>";
//Vc tbm pode fazer com letras
$array3 = range('a', 'j');

foreach($array3 as $item){
    echo $item."<br/>";
}


echo "=================================================================================================<br/>";
//Vc tbm pode colocar em contagem regressiva

$array4 = range(50, 40);

foreach($array4 as $item){
    echo $item."<br/>";
}

echo "=================================================================================================<br/>";
//Vc tbm pode colocar em contagem regressiva tbm pulando números
//Nesse caso ele está pulando de 3 em 3
$array5 = range(50, 20, 3);

foreach($array5 as $item){
    echo $item."<br/>";
}

echo "=================================================================================================<br/>";
//Eu tbm posso colocar de trás pra frente com as letras

$array6 = range('o', 'i');

foreach($array6 as $item){
    echo $item."<br/>";
}

echo "=================================================================================================<br/>";
//Essa função é mto útil em casos com ess em que eu coloquei 12 meses e dentgro de cas mês 30 dias
$mes = range(1, 12);

foreach($mes as $item){
    echo"<br/><br/><br/>".$item."º MÊS <br/><br/><br/>";
    
    $dias = range(1, 30);

    foreach($dias as $item){
        echo $item."º DIA <br/>";
    }
}