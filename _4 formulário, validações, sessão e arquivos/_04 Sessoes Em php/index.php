<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        //Toda pág que tiver uma sessão precisa desse comando 
        //iniciando a sessão
        session_start();

        //incluindo o cabeçalho do site
        require('header/header.php');

        //Verificando se existe a sessão aviso
        if($_SESSION['aviso']) {
            //Se existir então mostre
            echo $_SESSION['aviso'];
            //Depois de mostrar o aviso é hora de tirar ele da tela
            $_SESSION['aviso'] = '';

        }
        
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header/style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="recebedor.php">

        <label>
            Nome:
            <br/>
            <input type="text" name="nome">
        </label>
        <br/>
        <br/>
        <label>
            E-mail:
            <br/>
            <input type="text" name="email">
        </label>
        <br/>
        <br/>
        <label>
            Idade:
            <br/>
            <input type="text" name="idade">
        </label>
        <br/>
        <br/>

        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>