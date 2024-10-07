<?php

session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome) {

    //echo $nome;
    $_SESSION['nome'] = 'Olá '.$nome;
    header('location: index.php');
}else{
    //header('location: login.php');
}