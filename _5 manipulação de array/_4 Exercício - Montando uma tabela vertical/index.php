<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [
            'nome' => 'jefson',
            'idade' => 30,
            'empresa' => 'Uber',
            'cor' => 'Azul',
            'profissao' => 'Motorista de Aplicativo'
        ];

        $chaves = array_keys($array);

        $valores = array_values($array);
    ?>

    <h3>Essa foi a forma que eu resolvi o exercício</h3></br>
    <table border="1">
        <tr>
            <td><?php echo $chaves[0]; ?></td>
            <td><?php echo $valores[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $chaves[1]; ?></td>
            <td><?php echo $valores[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $chaves[2]; ?></td>
            <td><?php echo $valores[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $chaves[3]; ?></td>
            <td><?php echo $valores[3]; ?></td>
        </tr>
        <tr>
            <td><?php echo $chaves[4]; ?></td>
            <td><?php echo $valores[4]; ?></td>
        </tr>
    </table>

    </br>

    <h3>Essa é a forma correta de acordo com o Professor Bonieky</h3></br>

    <table border = "1">
        <?php foreach($array as $chaves => $valor): ?>

            <tr>
                <td><?php echo $chaves; ?></td>
                <td><?php echo $valor; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
    
</body>
</html>