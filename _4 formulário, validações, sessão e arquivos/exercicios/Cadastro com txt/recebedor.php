<?php

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nome) {

        $texto = file_get_contents('texto.txt');

        $texto .= "\n ".$nome;

        file_put_contents('texto.txt', $texto);

        header ('location: index.php');
    }