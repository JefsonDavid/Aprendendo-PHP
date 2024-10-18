<?php   
    // O QUE É CRUD?

        // -> C = CREATE
        // -> R = READ
        // -> U = UPDATE
        // -> D = DELETE
    
    //Esse conceito será a base de praticamente todo sistema que vamos fazer daqui pra frente
    
    //Um bom exemplo é um sistema de controle de estoque basicamente é vc fazer um CRUD

    //CRIANDO UM CRUD:

    //Primeiro vamos criar um arquivo chamado config.php onde vai ficar os dados de configuração
    //Dentro desse arquivo vamos fazer a conexão com o banco de dados

    //Depois vamos voltar para o index
    //Dentro da sigla CRUD o index.php seria o R

    require 'config.php';

    $lista = [];

    //Vamos listar os dados salvos no nosso banco de dados
    //Aqui vamos pegar todos os dados da tabela usuários do nosso banco
    $sql = $pdo->query("SELECT * FROM usuarios");

    //Agora vamos exibir caso tem algum usuário dentro da nossa tabela
    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>
<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    
    
    <!-- Aqui agora vamos exibir na tela o resultado da nossa lista com os dados da tabela usuários do nosso banco de dados -->
    <?php foreach($lista as $usuario): ?>

    <!-- Usando os dois pontos vc pode fechar a tag php aqui e reabir ela mais embaixo para finalizar o foreach e dessa forma podemos colocar codigo html aqui no meio para facilitar a visualização dos dados  -->
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>  <!-- vc pode abreviar a tag php tbm -->
            <td><?= $usuario['email']; ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario['id']; ?>">[ Editar ]</a>

                <!-- Para não acontecer acidentes do tipo o cara clica sem querer em excluir e deleta uma infomação que não queria é interessante usarmos o onclick="return confirm('tem certeza')" desse jeito vc pode cancelar ou confirmar o delete -->
                <a href="excluir.php?id=<?= $usuario['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>        
        
    <?php endforeach; ?>
</table>
    



