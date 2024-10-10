<?php
    $array = ['a', 'b', 'c', 'd', 'e', 'f'];


    //O array_splice é diferente do array_slice pois ele não vai criar um novo array e sim modificar o array existente
    //Vc vai passar 3 parâmetros nele. O nome do array, a posição q vai começar e quantos
    //Ele é usado para remover elementos de um array e também pode adicionar coisas após a remoção

    //Nesse exemplo ele vai remover o B
    array_splice($array, 1, 1);

    //Vai mostrar assim: Array ( [0] => a [1] => c [2] => d [3] => e [4] => f ) 
    print_r($array);

    echo '</br>';
    echo '============================================================================================================';
    echo '</br>';

    //Aqui ele vai remover do b pra frente
    array_splice($array, 1);

    //Vai mostrar assim: Array ( [0] => a )
    print_r($array);

    echo '</br>';
    echo '============================================================================================================';
    echo '</br>';

    //Após a remoção vc pode inserir item
    array_splice($array, 2, 2, 'K');

     //Vai mostrar assim: Array ( [0] => a [1] => b [2] => K [3] => e [4] => f ) 
    print_r($array);

    echo '</br>';
    echo '============================================================================================================';
    echo '</br>';

    //Removendo 3 itens e adicionando 2
    array_splice($array, 2, 3, ['K', 'O']);

     //Vai mostrar assim: Array ( [0] => a [1] => b [2] => K [3] => O [4] => f ) 
    print_r($array);