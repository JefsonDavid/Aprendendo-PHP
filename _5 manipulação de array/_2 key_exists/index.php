<?php
    $array = [
        'nome' => 'jefson',
        'idade' => 30, //Vamos dizer que ao invés de idade estivesse AGE, daria erro se não fizer essa verificação
        'empresa' => 'Uber',
        'cor' => 'Azul',
        'profissao' => 'Motorista de Aplicativo'
    ];

    //Essa função possui dois parâmetros, o primeiro é o que vc está procurando e o segundo é onde está procurando
    //Essa função vai retornar TRUE ou FALSE, ou seja, ela vai verificar se existe ou não.
    //Essa função tbm pode ser escrita de outra forma array_key_exists() e vai funcionar da msm forma
    if(key_exists('idade', $array)) {
        //Após a verificação vc vai exibir se existir 
        $idade = $array['idade'];
        echo $idade." anos";
    } else{
        echo "Não tem IDADE";
    }