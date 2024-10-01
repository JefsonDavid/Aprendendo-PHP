<?php   
$bolo1 = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

$bolo2 = [
    'vasilha',
    'água morna',
    ...$bolo1,
    'corante'
];

echo $bolo2[2];