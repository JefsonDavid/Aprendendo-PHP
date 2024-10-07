<?php

    //Existe uma função no PHP muito simpletes para ler esse tipo de arquivo
    //Serve tanto para aquivos internos como externos tbm
    $texto = file_get_contents('texto.txt');//Essa função consegue ler aquivos externos basta apenas ter a URL

    //Podemos manipular o texto da maneira que quisermos
    //O \n significa quer o texto por linhas
    $texto = explode("\n", $texto);

    //echo $texto;
    //Posso contar a quantidade de linhas que tem
    echo "LINHAS: ".count($texto);
    //echo $texto;
