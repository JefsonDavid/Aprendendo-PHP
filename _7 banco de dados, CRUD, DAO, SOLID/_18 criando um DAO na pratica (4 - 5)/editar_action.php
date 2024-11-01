<?php

    //puxando o config com a conexaão com o banco de dados 
    require 'config.php';
    //puxando o DAO com a classes
    require 'dao/UsuarioDaoMysql.php';

    //Crinado um objeto
    $usuarioDao = new UsuarioDaoMysql($pdo);


    //Vamos pegar o ID que está vindo em um campo oculto
    $id = filter_input(INPUT_POST, 'id');

    //Vamos pegar os dados que estão vindo pelo METODO POST do campo NAME
    $name = filter_input(INPUT_POST, 'name');

    //Vamos pegar os dados que estão vindo pelo METODO POST do campo EMAIL
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //FILTER_VALIDATE_EMAIL é para a verificação do email se está com a estrutura correta

    //==================================================================================================

    //Vamos verificar se o nome e email estão corretos
    if($id && $name && $email) {

        $usuario = new Usuario();
        $usuario->setId($id);
        $usuario->setNome($name); //Vou mandar o nome
        $usuario->setEmail($email); //vou mandar o email

        //Agora vamos mandar todos os dados atualizados para fazer o update no banco
        $usuarioDao->update($usuario);

        //Depois de executar a atualização eu vou para o index.php
        header("Location: index.php");
        exit;
        
    } else {
        header("Location: editar.php?id=".$id);
        exit;
    }

?>