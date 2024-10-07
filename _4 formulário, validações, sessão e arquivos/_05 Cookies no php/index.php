<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
        //Toda pág q tiver uma sessão precisa ter esse comando
        session_start();
        //
        require('header/header.php');
        //require('header.php');

        if($_SESSION['aviso']){
            echo $_SESSION['aviso'];
            $_SESSION['aviso'] = '';

        }
        
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header/style.css">
    <title>Document</title>
</head>
<body>

<a href="apagar.php">Apagar Cookie</a>

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