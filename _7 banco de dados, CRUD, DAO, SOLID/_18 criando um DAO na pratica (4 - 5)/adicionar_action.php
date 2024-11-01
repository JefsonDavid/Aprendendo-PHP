<?php  
    //puxando o config com a conexaão com o banco de dados 
    require 'config.php';
    //puxando o DAO com a classes
    require 'dao/UsuarioDaoMysql.php';

    //Crinado um objeto
    $usuarioDao = new UsuarioDaoMysql($pdo);


    //Vamos pegar os dados que estão vindo pelo METODO POST do campo NAME
    $name = filter_input(INPUT_POST, 'name');

    //Vamos pegar os dados que estão vindo pelo METODO POST do campo EMAIL
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //FILTER_VALIDATE_EMAIL é para a verificação do email se está com a estrutura correta

    //====================================================================================================

    //Vamos verificar se o nome e email estão corretos
    if($name && $email) {

        //verifica sem já tem o email cadastrado e caso não tenha ele vai cadastrar um novo usuário mandando nome e email
        if($usuarioDao->findByEmail($email) === false) {
            $novoUsuario = new Usuario();
            $novoUsuario->setNome($name);
            $novoUsuario->setEmail($email);

            $usuarioDao->add($novoUsuario);

            header("Location: index.php");
            exit;
        } else {
            header("Location: adicionar.php");
            exit;
        }       
    } else {
        header("Location: adicionar.php");
        exit;
    }