<?php

//FUNÇÃO QUE VAI SOMAR
function somar($a, $b){
    //$X = 0;
    $x = $a + $b;
    return $x;
};

//somar(3, 2);

echo somar(3,2);
echo "</br>";


function par($a){

    if($a % 2 == 0){
        return('O número '.$a.' é PAR');
    }if($a % 2 == 1){
        return('O número '.$a.' é IMPAR');
    }
}

echo par(4);
echo '</br>';

function laele(){
    for($i=1;$i<=10;$i++){
        echo $i;
    }
}

laele();
echo '<br/>';
echo '<hr/>';

function jojo($a){
    if($a>1 and $a<=10){
        for($i=$a;$i<=10;$i++){
            echo $i;
        }
    }
}

jojo(3);
echo '<br/>';
echo '<hr/>';

function latir(){
    echo 'Au au!';
}

for($f=1;$f<=15;$f++){
    latir();
}