<?php
    //IMPEDINDO A PASSAGEM DE SCRIPTS MALICIOSOS PELO CAPO NOME DO FORMULÁRIO
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);//COM ESSE FILTRO ELE VAI PEGAR O SCIPT E VAI TRANSCREVER ELE NA TELE E NÃO VAI RODAR O SCRIPT NA PÁGINA

    //VALIDADNDO EMAIL
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);//Vai fazer uma verificação se o email está nos padrões corretos

    //DESSE JEITO ELE VAI RETIRAR TUDO O QUE NÃO FOR NÚMERO E VAI MOSTRAR APENAS OS NÚMEROS
    $idade = filter_input(INPUT_POST, 'idade',  FILTER_SANITIZE_NUMBER_INT); //Caso vc queira apenas validar a idade vc pode usar o FILTER_VALIDATE_INT, porém dessa forma se o usuário enviar que a idade é 90 ANOS ele vai considerar errado. Diferentemente do FILTER_SANTIZE_NUMBER_INT que vai ignorar tudo o que não for número e vai mostrar apenas o que é número.

    // ====================================================

    //QUANDO VC JÁ TEM UMA INFOMAÇÃO E NÃO PRECISA PEGAR ELA DE NENHUM LUGAR, VC PODE USAR O filter_var() PARA FAZER APENAS A VALIDAÇÃO

    // $sobrenome = 'Borges';
    // filter_var($sobrenome, aqui vc coloca o filtro q quiser);
    
    // ====================================================

    if($nome && $email && $idade){
        echo 'NOME: '.$nome."<br/>";
        echo 'EMAIL: '.$email."<br/>";
        echo 'IDADE: '.$idade;
    }else{
        header("location: index.php");
        exit;
    }

    //======================================================================
            //FILTROS QUE PODEM SER USADOS
        
        //Todos esse aqui são de validação, ou seja, só vão funcionar se estiver tudo correto
        
        //FILTER_VALIDATE_EMAIL
        //FILTER_VALIDATE_FLOAT
        //FILTER_VALIDATE_INT
        //FILTER_VALIDATE_IP
        //FILTER_VALIDATE_URL

        //Todos esse são de limpeza, ou seja, vAI limpar tentando deixar o mais perto do que vc quer

        //FILTER_SANITIZE_EMAIL
        //FILTER_SANITIZE_STRING
        //FILTER_SANITIZE_URL
        //FILTER_SANITIZE_SPECIAL_CHARS
        //FILTER_SANITIZE_NUMBER_FLOAT
        //FILTER_SANITIZE_NUMBER_INT
    //======================================================================


