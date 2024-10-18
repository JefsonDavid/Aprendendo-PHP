<?php

require 'config.php';

//Vamos pegar o ID que está vindo em um campo oculto
$id = filter_input(INPUT_POST, 'id');

//Vamos pegar os dados que estão vindo pelo METODO POST do campo NAME
$name = filter_input(INPUT_POST, 'name');

//Vamos pegar os dados que estão vindo pelo METODO POST do campo EMAIL
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//FILTER_VALIDATE_EMAIL é para a verificação do email se está com a estrutura correta

//====================================================================================================

//Vamos verificar se o nome e email estão corretos
if($id && $name && $email) {

    //Processo de atualização
    //Vamos montar nossa query
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");

    //Agora vamos trocar todos os dados
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);

    $sql->execute();

    //Depois de executar a atualização eu vou para o index.php
    header("Location: index.php");
    exit;
    


} else {
    header("Location: adicionar.php");
    exit;
}

?>