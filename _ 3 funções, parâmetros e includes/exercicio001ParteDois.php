<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    function dayOfTheWeek($date)
    {
        $daysOfWeek = [
            0 => 'Domingo',
            1 => 'Segunda-feira',
            2 => 'Terça-feira',
            3 => 'Quarta-feira',
            4 => 'Quinta-feira',
            5 => 'Sexta-feira',
            6 => 'Sábado'
        ];

        $day = date('w', strtotime($date));
        echo date('d / m / Y', strtotime($date)) . " - " . $daysOfWeek[$day];
    }

    $date = '2024-03-14';
    dayOfTheWeek($date);
    ?>
</body>

</html>