<?php

    //startando a sessão
    session_start();

    //limpando a sessão
    $_SESSION['nome'] = '';

    //Redirecionando para a página de login
    header('location: login.php');