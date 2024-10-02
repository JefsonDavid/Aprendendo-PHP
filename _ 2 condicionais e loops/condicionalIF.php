<?php
    $idade = 9;
    $peso = 46;

    if($idade > 17 and $peso >= 50) {
        echo 'Ele é maior de idade e pesa mais que 50Kg';
    }if($idade > 17 and $peso < 50){
        echo 'Ele é maior de idade e pesa menos que 50Kg';
    }if($idade <= 17 and $peso >= 50) {
        echo 'Ele é menor de idade e pesa mais que 50Kg';
    }if($idade<= 17 and $peso < 50){
        echo 'Ele é menor de idade e pesa menos que 50Kg';
    };