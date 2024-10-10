<?php

    $array = [
        'nome' => 'jefson',
        'idade' => 30,
        'empresa' => 'Uber',
        'cor' => 'Azul',
        'profissao' => 'Motorista de Aplicativo'
    ];


//=============================================================================================================
//FORMA QUE EU CONSEGUI RESOVER
    echo "<table border = '1'>";
            echo "<tr>";
                foreach ($array as $chaves => $valor) {
                    echo "<th>";
                        echo $chaves; 
                    echo "</th>";
                }
            echo "</tr>";
            
        echo "<tr>";
            foreach ($array as $chaves => $valor) {
                echo "<td>";     
                    echo $valor;
                echo "</td>";
            }
        echo "</tr>";

    echo "</table> </br>";

//=============================================================================================================
//FORMA QUE O PROFESSOR RESOVEU

$chaves = array_keys($array);
$valores = array_values($array);

?>

<table border="1">
    <tr>
        <?php foreach($chaves as $chave): ?>
            <th><?php echo $chave; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach($valores as $valor): ?>
            <td><?php echo $valor; ?></td>
        <?php endforeach; ?>
    </tr>
</table>
