<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebedor.php" method="POST">
        <label>
            Novo Nome:
            </br>
            </br>
            <input type="text" name="nome">
            <input type="submit" value="Adicionar">
        </label>
    </form>
    <label>
        <h1>Lista de Nomes</h1>
        <ul>
            <li>
                <?php

                    $texto = file_get_contents('texto.txt');
                
                    //$texto = explode("\n", $texto);
                    if ($texto) {
                        echo $texto;
                    }
                ?>
            </li>    
        </ul>
    </label>
</body>
</html>