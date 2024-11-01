<?php
    //puxando o config com a conexaão com o banco de dados 
    require 'config.php';
    //puxando o DAO com a classes
    require 'dao/UsuarioDaoMysql.php';

    //Criando um objeto
    $usuarioDao = new UsuarioDaoMysql($pdo);

    $usuario = false;
    //Agora vamos pegar o ID do usuário que vamos editar
    $id = filter_input(INPUT_GET, 'id');
    
    if($id) {
        $usuario = $usuarioDao->findById($id);
    } 
    
    if($usuario === false) {
        header("Location: index.php");
        exit;
    }
?>

<h1>Editar Usuário</h1>

<form method="POST" action="editar_action.php">
    <!-- Para mandar o ID para a tela de editar_action.php vamos usar um campo oculto -->
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>"/>

    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?= $usuario->getNome(); ?>"/>
    </label><br/>

    <label>
        Email:<br/>
        <input type="email" name="email" value="<?= $usuario->getEmail(); ?>"/>
    </label><br/><br/>

    <input type="submit" value="Salvar" />
</form>