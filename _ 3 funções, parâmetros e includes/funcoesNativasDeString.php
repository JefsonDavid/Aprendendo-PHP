<?php

$nomeSujo = '     Jefson        ';
//A FUNÇÃO TRIM() LIMPA OS ESPAÇOS NÃO UTILIZADOS DA STRING
$nomeLimpo = trim($nomeSujo);


//A FUNÇÃO STRLEN() CONTA QUANTAS CARCTERES TEM NA STRING
echo "NOME SUJO: ".strlen($nomeSujo)."<br/>";
echo "NOME LIMPO: ".strlen($nomeLimpo);
echo '<hr>';
//======================================================================================

$nome = 'Jefson David';

echo strtolower($nome).'<br/>';
echo strtoupper($nome);

echo '<hr>';

//======================================================================================
//A FUNÇÃO STR_REPLACE() VAI MUDAR UMA STRING OU PARTE DE UMA STRING POR OUTRA PALAVRA, LETRAS, NÚMEROS, ETC

//AQUI ELE VAI SUBSTITUIR O NOME Jefson POR João
$nomeAlterado = str_replace('Jefson', 'Joao', $nome);
//AQUI VAI SUBSTITUIR A LETRA e PELO NÚMEOR 7
$nomeZoado = str_replace('e', '7', $nome);

echo $nomeAlterado.'<br/>';
echo $nomeZoado;
echo '<hr>';

//======================================================================================
//VC PODE TBM DELIMITAR A QUATIDADE DE CARACTERES VC QUER MOSTRAR
$completoNome = 'Jefson David';
//MOSTARNDO APENAS 5 CARCTERES DO NOME COMÇANDO PELA POSIÇÃO 0
$name = substr($completoNome, 0, 5);
//VAI MOSTAR 3 CARACTERES COMEÇANDO PELA 3ª POSIÇÃO
$name2 = substr($completoNome, 2, 3);
//VAI MOSTAR 3 CARACTERES COMEÇANDO NA 3ª POSIÇÃO DE TRÁS PRA FRENTE
$name3 = substr($completoNome, -3, 3);


echo $name.'<br/>';
echo $name2.'<br/>';
echo $name3;
echo '<hr>';

//======================================================================================
//ESSA FUNÇÃO VAI PROCURAR UMA DETERMINADA CARCTERE OU PALAVRA DENTRO DE UMA STRING E RETORNAR A POSIÇÃO DELA.

$meuNome = 'Jefson David';
//VAI PROCURAR EM QUAL POSIÇÃO ESTÁ A LETRA a DENTRO DA VARIÁVEL $meuNome;
$posicao = strpos($meuNome, 'e');
if($posicao > -1){
    echo 'A letra que vc procura está na '.$posicao.' posição da string';
}else{
    echo 'Não foi possivel achar a posição!';
}

echo '<hr>';
//======================================================================================

//A FUNÇÃO ucfirst(); VAI TRANSFORMAR A PRIMEIRA LETRA DA STRING EM MAIÚSCULA

$nDeNome = 'jefson';

echo ucfirst($nDeNome).'<br/>';

//VC TBM PODE MUDAR TODAS AS PRIMEIRAS LETRAS DE TOTADAS AS PALAVRAS PARA MAIÚCULAS
$nDeNome2 = 'jefson david borges';

echo ucwords($nDeNome2);

echo '<hr>';
//======================================================================================
//ESSA FUNÇÃO TRANFORMA UMA VARIAVEL EM UM ARRAY
$nCompleto = 'Jefson David Borges';

//ELA VAI USAR O ESPAÇO COM PARAMETRO PARA DIVIDIR OS ITENS DO ARRAY
$nomes = explode(' ', $nCompleto);

print_r($nomes);

echo '<hr>';
//======================================================================================

//ESSA FUNÇÃO FORMATA NUMEROS

$numero = 12913.12;

//NESSA FUNÇÃO VC PASSA 4 PARÂMETROS, OS 2 PRIMEIROS SÃO OBRIGATÓRIOS E SÃO O PRÓPRIO NÚMERO E QUANTAS CASAS DECIMAIS VC VAI USAR, O 3º E O 4º NÃO SÃO OBRIGATÓRIOS E SÃO PRA IDENTIFICAR A MANEIRA QUE VC QUER SEPARAR AS SUAS CASAS DECIMAIS E OS MILHARES.
echo 'R$ '.number_format($numero, 2, ',', '.');