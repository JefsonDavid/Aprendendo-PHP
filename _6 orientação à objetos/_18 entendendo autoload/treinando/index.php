<?php

    require 'autoloading.php';

    // class Somar {
    //     private $resultado = 0;

    //     private function somar($a, $b){
    //         $this->resultado = $a + $b;
    //         //return $resultado;
    //     }

    //     public function setSomar($a, $b){
    //         $this->somar($a, $b);
    //     }

    //     public function getSomar(){
    //         return $this->resultado;
    //     }
    // }

    //Fazendo a soma =================================
    $cal = new Somar();
    $cal->setSomar(3, 2);

    echo 'A soma dos valores é: '.$cal->getSomar().'</br>';

    //Fazendo a subtração ============================
    $c = new Subtrair();
    $c->setSubtrair(10, 3);
    
    echo 'A subtração dos valores é: '.$c->getSubtrair().'</br>';

    //Fazendo a multiplicação ========================
    $cal = new Multiplicar();
    $cal-> setMultiplicar(2, 5);

    echo 'A multiplicação dos valores é: '.$cal->getMultiplicar().'</br>';

    //Fazendo a divisão ==============================
    $cal = new Dividir();
    $cal->setDividir(12, 4);

    echo 'A divisão dos valores é: '.$cal->getDividir().'</br>';

    