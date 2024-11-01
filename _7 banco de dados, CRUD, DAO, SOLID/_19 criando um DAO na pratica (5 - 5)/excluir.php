<?php
    //puxando o config com a conexão com o banco de dados 
    require 'config.php';
    //puxando o DAO com a classes
    require 'dao/UsuarioDaoMysql.php';

    //Criando um objeto
    $usuarioDao = new UsuarioDaoMysql($pdo);

    //Agora vamos pegar o ID do usuário que vamos excluir
    $id = filter_input(INPUT_GET, 'id');

    //Depois de fazer o filtro vamos verficar se foi enviado algum dado
    if($id) {
        $usuarioDao->delete($id);
    }   

    header("Location: index.php");
    exit;