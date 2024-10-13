<?php

    //MÉTODO ESTÁTICO => É um método que vc vai fazer dentro da sua classe e que ele é "independente", ou seja , ele pode ser usado externamente.
    class Matematica {
        //Vc consegue fazer um método estático
        public static string $nome = 'Jefson';

        //exemplo de função estática
        public static function somar($x, $y){
            return $x + $y;
        }
    }
    //Com o método estático vc não precisa fazermais desse jeito
    // $m = new Matematica();
    // echo $m->somar(10, 20);


    //tanto nos MÉTODOS quanto nas FUNÇÕES ESTÁTICAS vc só precisa fazer o referencial
    //Mostrando a soma de dois números usando uma função estática
    echo Matematica::somar(15, 35).'<br/>';

    //Monstrando o nome de um método estático
    echo Matematica::$nome;



?>