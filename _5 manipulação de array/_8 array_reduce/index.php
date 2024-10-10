<?php
    $numeros = [1, 2, 3, 4, 5];

    //A array_reduce ela vai pegar o array que vc mandar pra ela e ela vai execultar uma função em cadaum dos itens que tem dentro do array 


    //Vc vai precisar criar a função e ela vai receber dois parâmentro
    //O primeiro é um subtotal que começa com o valor 0
    function somar($subtotal, $item){

        $subtotal = $subtotal + $item;
        return $subtotal;

    }

    $total = array_reduce($numeros, 'somar');

    echo $total."</br>";

    //Exemplo mais complexo

    $pessoas = [
        ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
        ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
        ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
        ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
        ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
        ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
    ];

    //Total de homens
    function contar_m($subtotal, $item){
        if($item['sexo'] === 'M'){
            $subtotal++;
        }
        return $subtotal;
    }

    //Existe um terceiro parâmetro que é o valor do $subtotal, caso vc não coloque ele vai ser 0, porém vc pode colocar qualquer valor pra ele.
    $total_m = array_reduce($pessoas, 'contar_m', 0);

    //Soma das notas dos homens
    function soma_m($subtotal, $item){
        if($item['sexo'] === 'M'){
            $subtotal += $item['nota'];
        }
        return $subtotal;
    }

    $soma_m = array_reduce($pessoas, 'soma_m');


    //Media das notas dos homens
    $media_m = $soma_m / $total_m;


    echo "Total de homens ". $total_m."</br>";

    echo "Tatal das notas do homens ". $soma_m."</br>";

    echo "O valor da média das notas dos homens é: ".$media_m."</br>";

    //Agora vamos pras mulheres

    //Tatal de mulheres
    function total_de_mulheres($subtotal, $item){
        if($item['sexo'] === 'F'){
            $subtotal++;
        };
        return $subtotal;
    }

    $total_f = array_reduce($pessoas, 'total_de_mulheres');

    //Soma das notas das mulheres
    function soma_das_notas_das_mulheres($subtotal, $item){
        if($item['sexo'] === 'F'){
            $subtotal += $item['nota'];
        }

        return $subtotal;
    }

    $soma_f = array_reduce($pessoas, 'soma_das_notas_das_mulheres');

    //Media das notas das mulheres
    $media_f = $soma_f / $total_f;

    echo "O total de mulheres é: ".$total_f."</br>";

    echo "O total das notas das mulheres é: ".$soma_f."</br>";

    echo "A mádia das notas das mulheres é ".$media_f."</br>";