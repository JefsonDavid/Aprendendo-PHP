<?php


    //FUNÇÃO PARA DETERMINAR O DIA DA SEMANA PELA DATA
    function diaDaSemana($a){

        $time = strtotime($a);
      
        $dia = date('w', $time);

        if($dia == 0){
            echo 'Domingo';
        }if($dia == 1){
            echo 'Segunda-Feira';
        }if($dia == 2){
            echo 'Terça-Feira';
        }if($dia == 3){
            echo 'Quarta-Feira';
        }if($dia == 4){
            echo 'Quinta-Feira';
        }if($dia == 5){
            echo 'Sexta-Feira';
        }if($dia == 6){
            echo 'Sábado';
        };
    };


    $data = '2024-04-29';
    diaDaSemana($data);

   

   


    
