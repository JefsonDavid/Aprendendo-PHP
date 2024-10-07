<?php
    session_start();

    //Filtro para não deixar nenhum script malicioso passar atráves do campo nome
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    //Verificação se a variável $nome tem uma informação valida e correta
    if($nome){
        $_SESSION['nome'] = 'Olá '.$nome;
        header('location: index.php');
    } else {
        header('location: login.php');
    }