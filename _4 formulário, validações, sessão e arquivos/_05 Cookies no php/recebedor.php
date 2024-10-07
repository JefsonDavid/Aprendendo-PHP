<?php
    session_start();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

    if($nome && $email && $idade){

        //Um COOKIE só pode ser SETADO antes de ser exibido alguma coisa na tela.
        $expiracao = time() + (86400 * 30); //DURAÇÃO DO COOKIE VAI SER DE 30 DIAS
        //Setando o cookie
        setcookie('nome', $nome, $expiracao);

        //Tbm pode ser feito da seguinte maneira ficando tudo em uma unica linha
        //setcookie('nome', $nome, time() + (86400 * 30));
        

        echo 'NOME: '.$nome."<br/>";
        echo 'EMAIL: '.$email."<br/>";
        echo 'IDADE: '.$idade;

    } else {

        $_SESSION['aviso'] = 'preencha os itens corretamente';

        header("location: index.php");
        exit;
    }