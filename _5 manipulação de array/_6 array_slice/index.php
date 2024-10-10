<?php

    $array = ['a', 'b', 'c', 'd', 'e', 'f'];

    //Esse array pode ser usado para fazer paginação por exemplo se vc tiver um array com 1000 itens e quiser mostrar
    //apenas 10 itens por página.
    
    //Nesse array vc passa 3 parâmegtros.
    //  => O primeiro é o nome do ARRAY
    // => O segundo é qual a posição que vc quer começar
    // => E o terceiro é quantos itens vc quer pegar 
    
    //(OBS: Não é a posição, ou seja, aqui ele não vai pegar da posição 2 até a 3 e 
    //sim vai começar na posição 2 e vai andar 3 casas)

    $retorno = array_slice($array, 2, 3);

    //Nesse exemplo vai mostar assim: Array ([0] => c[1]=> d[2]=> e)
    print_r($retorno);

    echo '</br>';

    echo '</br>';

    //(OBS: Se vc colocar apenas o segundo parâmetro ele vai pegar todos os itens apartir daquela posição)
    $return = array_slice($array, 3);

    //Nesse exemplo vai mostar assim: Array ([0] => d[1]=> e[2]=> f)
    print_r($return);

    //(OBS: Vc pode pegar contando do final do array
    $retorno2 = array_slice($array, -3, 2);

    //Nese exemplo vai mostrar assim: Array ([0]=> d[1]=> e)
    print_r($retorno2);