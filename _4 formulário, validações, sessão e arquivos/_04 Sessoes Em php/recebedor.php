    <?php
    //Em qlqr arquivo que eu for usar uma sessão precisa-se iniciar ela
    //Iniciando sessão
    session_start();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

    if($nome && $email && $idade){

        echo 'NOME: '.$nome."<br/>";
        echo 'EMAIL: '.$email."<br/>";
        echo 'IDADE: '.$idade;

    } else {
        //Colocando um aviso caso o usuário não preencha o formulário corretamente
        $_SESSION['aviso'] = 'preencha os itens corretamente!';

        //redirecionamento para voltar ao formulário
        header("location: index.php");
        exit;
    }