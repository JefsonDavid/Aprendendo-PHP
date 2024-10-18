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
?>
<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
</table>
    



