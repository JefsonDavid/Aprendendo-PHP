<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
        //incluindo o cabeçalho a página
        require 'cabecalho/header.php';

        //startando a sessão
        session_start();

        //verificação se existi uma sessão com o nome 
        if($_SESSION['nome']){
            //Se existir então escreva
            echo $_SESSION['nome'];
        } else {
            header("location: login.php");
        }
    ?>

    <a href="sair.php">Sair</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incluindo o css na página -->
    <link rel="stylesheet" href="cabecalho/style.css">
    <title>Index</title>
</head>
<body>
    
</body>
</html>