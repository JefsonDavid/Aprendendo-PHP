<?php
$idade = 18;

//Vc pode fazer da seguinte maneira
//echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';
//##################################################################
//Vc tbm pode armazenar tudo em uma variável

//$mostrarResultado = ($idade < 18)? 'Menor de idade':'Maior de idade';

//echo $mostrarResultado;

//Armazenando dados de BOOLEAN usando o condicional ternário

$menorDeIdade = ($idade < 18)? true : false;

if ($menorDeIdade) {
    echo 'Vc é MENOR de idade';
}else{
    echo 'Vc é MAIOR de idade';
}

?>