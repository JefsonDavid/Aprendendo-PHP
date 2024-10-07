<!DOCTYPE html>
<html lang="pt_br">
<head>
        <?php
            session_start();

            require 'cabecalho/header.php';
        ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cabecalho/style.css">
    <title>Document</title>
</head>
<body>
        <form action="recebedor.php" method="POST">

            <label class="label_login">
                Qual o seu nome?
                <br/>
                <br/>
                <input type="text" name="nome">
            </label>
            <br/>
            <br/>
            <label class="label_button">
                <input type="submit" value="SALVAR">
            </label>

        </form>
    
</body>
</html>

