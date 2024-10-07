<?php

    $texto = 'Jefson David';

    //Essa função faz duas coisas. Caso o arquivo não exista ele vai criar um arquivo e caso já exista ele vai substituir
    //Ele vai ter dois parâmetros o primeiro é o NOME DO ARQUIVO e o segundo é o CONTEÚDO
    file_put_contents('nome.txt', $texto);

    echo 'Arquivo criado com sucesso!';

    //====================================================================

    //Lendo o texto
    $text = file_get_contents('texto.txt');

    //Vamos adicionar uma nova linha a esse texto
    $text .= "\n Eu sou Jefson David";

    //Agora vamos salvar essa nova linha no arquivo
    file_put_contents('texto.txt', $text);