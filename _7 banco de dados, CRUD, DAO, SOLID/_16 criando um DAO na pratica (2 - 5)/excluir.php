<?php
    //Ele vai ter uma estrutura parecisa com o editar.php, porém sem a parte visual

    //Ao contrario da página adicionar.php aqui vamos precisar fazer interações com o banco de dados
    require 'config.php';

    //Agora vamos pegar o ID do usuário que vamos editar
    $id = filter_input(INPUT_GET, 'id');

    //Depois de fazer o filtro vamos verficar se foi enviado algum dado
    if($id) {

        $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

    }   

    header("Location: index.php");
    exit;