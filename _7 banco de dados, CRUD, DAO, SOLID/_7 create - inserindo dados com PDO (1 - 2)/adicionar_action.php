<?php   
    require 'config.php';

    //Vamos pegar os dados que estão vindo pelo METODO POST do campo NAME
    $name = filter_input(INPUT_POST, 'name');

    //Vamos pegar os dados que estão vindo pelo METODO POST do campo EMAIL
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //FILTER_VALIDATE_EMAIL é para a verificação do email se está com a estrutura correta

    //Vamos verificar se o nome e email estão corretos
    if($name && $email) {
        
        //Vc pode fazer dessa maneira, porém seu sistema vai ficar vulnerável a vários tipos de ataques
        //$pdo->query("INSERT INTO usuarios (nome , email) VALUES ('$name', '$email')");

        //A melhor forma de fazer é da seguinte maneira
        //Essa maneira se chama PDO Statement que basicamente nós vamos montando aos poucos a nossa query e depois executamos a nossa query
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
        //Basicamente acima montamos um tamplete que depois vamos substituir VALUES :name e :email por seu valores especificamente

        //Agora vamos fazer as associações de cada um dos itens para para os respectivos values
        //Vamos usar o metodo de sql chamado bindValue() 
        //Tbm temos o metodo bindParam
        $sql->bindValue(':name', $name);
        //Esse metodo vai fazer a associação do que estiver na variável agora, depois não importa

        $sql->bindValue(':email', $email);

        //$sql->bindParam(':email', $email);
        //Esse metodo faz a associação na própria variável, ou seja, se eu mudar o dado da variável depois daqui msm assim ele vai mudar o email

        //Até aqui ele está só montando a query e ainda não executou nada (PDO Statement)

        //Para executar basta colocar o seguinte
        $sql->execute();

        //Depois de executar vc precisa voltar para o index pois é onde está a listagem
        header("Location: index.php");
        exit;

    } else {
        header("Location: adicionar.php");
        exit;
    }