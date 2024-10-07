<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once('header.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enviado Dois Números e Fazendo a Soma</title>
</head>
<body>
    <form action="config.php" method="POST">

    <label>
        Primeiro Número:
        <br/>
        <input type="number" name="primeiro">
    </label>
    <br/>
    <br/>
    <label>
        Segundo Número:
        <br/>
        <input type="number" name="segundo">
    </label>
    <br/>
    <br/>
    <input type="submit" value="Enviar" class="button">

    </form>

</body>
</html>