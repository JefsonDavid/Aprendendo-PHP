<?php   
    require 'config.php';

    //Vamos pegar os dados que estão vindo pelo METODO POST do campo NAME
    $name = filter_input(INPUT_POST, 'name');

    //Vamos pegar os dados que estão vindo pelo METODO POST do campo EMAIL
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //FILTER_VALIDATE_EMAIL é para a verificação do email se está com a estrutura correta

    //====================================================================================================

    //Vamos verificar se o nome e email estão corretos
    if($name && $email) {

        //Verificando se o email já está cadastrado no banco de dados
        //Aqui estamos pedindo para o banco nós dá todos os usuários que tem esse email que pegamos no formulário
        //Com isso o que estamos esperando é que nossa query não dê nenhum resultado pois isso significa que não tem esse email cadastrado no nosso banco de dados
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        //====================================================================================================

        //Agora vamos verificar se a nossa query trouxe algum resultado
        //O rowCount vai dizer quantos resultados vieram da consulta que fizemos acima
        if($sql->rowCount() === 0) { //Caso o resultado seja 0 execute o codigo abaixo

            //====================================================================================================

            //Vc pode fazer dessa maneira, porém seu sistema vai ficar vulnerável a vários tipos de ataques
            //$pdo->query("INSERT INTO usuarios (nome , email) VALUES ('$name', '$email')");

            //A melhor forma de fazer é da seguinte maneira
            //Essa maneira se chama PDO Statement que basicamente nós vamos montando aos poucos a nossa query e depois executamos a nossa query
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
            //Basicamente acima montamos um tamplete que depois vamos substituir VALUES :name e :email por seu valores especificamente

            //====================================================================================================

            //Agora vamos fazer as associações de cada um dos itens para para os respectivos values
            //Vamos usar o metodo de sql chamado bindValue() 
            //Tbm temos o metodo bindParam
            $sql->bindValue(':name', $name);
            //Esse metodo vai fazer a associação do que estiver na variável agora, depois não importa

            //====================================================================================================

            $sql->bindValue(':email', $email);

            //$sql->bindParam(':email', $email);
            //Esse metodo faz a associação na própria variável, ou seja, se eu mudar o dado da variável depois daqui msm assim ele vai mudar o email

            //Até aqui ele está só montando a query e ainda não executou nada (PDO Statement)

            //====================================================================================================

            //Para executar basta colocar o seguinte
            $sql->execute();

            //====================================================================================================

            //Depois de executar vc precisa voltar para o index pois é onde está a listagem
            header("Location: index.php");
            exit;

        } else {
            
            //No caso de já ter algum email cadastrado vamos voltar para o formulário
            header("Location: adicionar.php");
            exit;

        }
 

    } else {
        header("Location: adicionar.php");
        exit;
    }