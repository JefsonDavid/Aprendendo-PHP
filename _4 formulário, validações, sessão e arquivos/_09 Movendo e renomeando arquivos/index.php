<?php
    //Renomeando arquivo
    //Primeiro vc vai colocar o caminho do aquivo com o seu nome e depois o novo nome
    rename('teste.txt', 'teste2.txt');

    //Movendo aquivo
    //Primeiro coloca o caminho com o nome atual do arquivo e depois o caminho com o novo nome
    rename('teste2.txt', 'pasta/teste2.txt');

    //Copiando o arquivo
    //Primeiro vc vai colcar o caminho de origem do arquivo e depois o caminho de destino com o nome do arquivo
    copy('pasta/teste2.txt', 'teste.txt');