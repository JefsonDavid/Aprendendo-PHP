<?php   
    require 'config.php';
    //puxando arquivo de dentro da pasta dao
    require 'dao/UsuarioDaoMysql.php';

    //Após puxar o arquivo vamos instânciar ele
    $usuarioDao = new UsuarioDaoMysql($pdo);

    $lista = $usuarioDao->findAll();

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
    <!-- Esse $usuario agora vai ser um objeto da classe Usuario -->
    <?php foreach($lista as $usuario): ?>
    <!-- Usando os dois pontos vc pode fechar a tag php aqui e reabir ela mais embaixo para finalizar o foreach e dessa forma podemos colocar codigo html aqui no meio para facilitar a visualização dos dados  -->
    
        <tr>
            <td><?= $usuario->getId(); ?></td>
            <td><?= $usuario->getNome(); ?></td> 
            <td><?= $usuario->getEmail(); ?></td>
            <td>
                <!-- Aqui criamos um link que vai mandar para a pagina editar.php o ID do usuário que vc quer editar -->
                <a href="editar.php?id=<?= $usuario->getId(); ?>">[ Editar ]</a>

                <!-- Para não acontecer de clica sem querer e excluir uma infomação que não queria é interessante usarmos o onclick="return confirm('tem certeza')" desse jeito vc pode cancelar ou confirmar o delete -->
                <a href="excluir.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>        
        
    <?php endforeach; ?>
</table>
    



