<?php

//A FUNÇÃO filter_input VAI PEGAR O CAMPO ENVIADO E FAZ FALTROS NESSE CAMPOS APARA VERIFICAR SE ELE ESTÁ PREECHIDO CORRETAMENTE ENTRE OUTROS.
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');

//VERIFICARNDO SE OS CAMOPOS NOME E IDADE ESTÃO PREENCHIDOS
if($nome && $idade){
    echo 'NOME: '.$nome. '<br/>';
    echo 'IDADE: ',$idade;
}else{
    //echo 'Nenhum dado enviado';

    //REDIRECIOAMENTO CASO OS ITENS NÃO ESTEJAM PREENCHIDOS
    header("Location: introducaoHttp.php");
    exit;
}