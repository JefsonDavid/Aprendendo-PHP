<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
        session_start();

        if($_SESSION['nome']) {
            echo $_SESSION['nome'];
            
        }else{
            header("location: login.php");
        }
    ?>
    <a href="sair.php">Sair</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>