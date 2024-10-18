<?php
    //Ao contrario da página adicionar.php aqui vamos precisar fazer interações com o banco de dados
    require 'config.php';

    //Essa variável vai ser um array que vai ter as infomações do usuário
    $info = [];

    //Agora vamos pegar o ID do usuário que vamos editar
    $id = filter_input(INPUT_GET, 'id');

    //Depois de fazer o filtro vamos verficar se foi enviado algum dado
    if($id) {

        //Agora vamos procurar esse ID
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");

        //Agora vamos subtituir os dados
        $sql->bindValue(':id', $id);

        //Agora vamos executar
        $sql->execute();

        //Depois de executar vamos fazer a verificação que ele achou alguma coisa
        if($sql->rowCount() > 0) {

            //Aqui vamos usar o fetch pois diferente do fetchAll que pega tudo, o fetch pega apenas o primeiro e tiver apenas um é ele que vai ser pego
            $info = $sql->fetch( PDO::FETCH_ASSOC );


        } else {
            header("Location: index.php");
            exit;
        }

    } else {
        header("Location: index.php");
        exit;
    }


?>

<h1>Editar Usuário</h1>

<form method="POST" action="editar_action.php">
    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?= $info['nome']; ?>"/>
    </label><br/>

    <label>
        Email:<br/>
        <input type="email" name="email" value="<?= $info['email']; ?>"/>
    </label><br/><br/>

    <input type="submit" value="Salvar" />
</form>