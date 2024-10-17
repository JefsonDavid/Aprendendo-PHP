
<?php
    //Existem algumas formas de fazer a conexão com o bando de dados usando o PHP, porém a mais conhecida é o PDO.

    //PDO é uma biblioteca que normalmente já vem habilitada no PHP e ela serve pra conectar com vários bancos de dados pois ela tem drives/funcionalidades pra conectar com vários tipos de bancos de dados diferentes.

    //O PDO é uma classes que vc vai instanciar ela, ou seja, vc vai criar um objeto
    //Dentro desse objeto vc precisa passar algumas informações
        //->Qual o bando de dados vc está usando = mysql:
        //->Qual o nome do seu banco de dados = dbname=test;
        //->Onde está hospedado o seu bando de dados = host=localhost (OBS: vc pode usar o IP 127.0.0.1 ou o IP da sua maquina)
        //->Qual o nome do usuário pra fazer o login = "root"
        //Qual a senha = "" (Nesse caso é vazio, ou seja, não tem senha)
    $pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

    //Vamos pegar a lista de usuários que tem dentro do nosso banco
    //Sempre que vc ver QUERY() em banco de dados está relacionado a consulta
    //Nesse caso vamos fazer uma consulta com PDO usando o QUERY()
    $sql = $pdo->query('SELECT * FROM usuarios'); //Aqui vamos selecionar todos os dados da tabela usuarios

    //Para seber quantos itens tem no banco de dados
    echo "TOTAL: ".$sql->rowCount();
    //row (contagem) Count (linha)

    //Vamos usar pra mostar o fetchAll 
    //featchAll significa = fetch (pegue os dados) quais?  All (todos) 
    $dados = $sql->fetchAll( PDO::FETCH_ASSOC );
    //O PDO::FETCH_ASSOC vai fazer os dados não se repetir, com isso vai mudar disso...
    //=======================================================================================
    //Array
    // (
    //     [0] => Array
    //         (
    //             [id] => 1
    //             [0] => 1
    //             [nome] => Jefson David
    //             [1] => Jefson David
    //             [email] => jefsondavid@gmail.com
    //             [2] => jefsondavid@gmail.com
    //         )
    //=======================================================================================
    //Para isso...
    //=======================================================================================
    // Array
    // (
    //     [0] => Array
    //         (
    //             [id] => 1
    //             [nome] => Jefson David
    //             [email] => jefsondavid@gmail.com
    //         )
    //=======================================================================================


    echo '<pre>';

    print_r($dados);