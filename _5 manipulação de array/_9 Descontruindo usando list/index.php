<?php
    $array = ['Jefson', 30, 'chá', 'azul'];

    //As vezes vc pode receber um array com coisas aleatórias mas baseado na posição vc sabe que informação é aquela. Para organizar esse array vc pode usar a função list().

    //A função list() criar variáveis como se fossem arays
    list($nome, $idade, $bebida, $cor) = $array;

    echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." na sua caneca de cor ".$cor;