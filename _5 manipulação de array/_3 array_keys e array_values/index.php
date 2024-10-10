<?php
    //No lado ESQUERDO do ARRAY estão as KEYS e no lado DIREITO estão os VALUES
    $array = [
        'nome' => 'jefson',
        'idade' => 30,
        'empresa' => 'Uber',
        'cor' => 'Azul',
        'profissao' => 'Motorista'
    ];

    //Quando vc faz isso ele gera um segundo array onde vai armazenar apenas as chaves (KEYS)
    $chaves = array_keys($array);

    //print_r($chaves); 
    // Vai mostar assim: Array ( [0] => nome [1] => idade [2] => empresa [3] => cor [4] => profissao ) 



    //Aqui ele vai criar um novo array somente com os valores (VALUES)
    $valores = array_values($array);

    print_r($valores);
    //Vai aparecer assim: Array ( [0] => jefson [1] => 30 [2] => Uber [3] => Azul [4] => Motorista ) 