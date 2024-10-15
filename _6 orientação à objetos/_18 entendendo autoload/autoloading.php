<?php
    //O autoloading nada mais é que um processo que vc faz no seu código de forma que o PHP consiga identificar qual é a classe que vc tá chamando e vc não precisa ficar dando REQUIRE em todas as classes que vc for utilizar pois vc cria um procedimento que vai fazer esse processo por vc automaticamente.l

    //A função spl_autoload_register() é uma função do PHP que registra um AUTOLOADING Ela recebe uma função anônima function($class) que é por onde vai chegar o nome da classe que vc quer.
    spl_autoload_register(function($class){
        //Aqui estamos fazendo uma verificação pra saber se esse arquivo existe
        if(file_exists('classes/'.$class.'.php')) {
            //No caso de existir vamos fazer um require importando ele pra nossa página
            require 'classes/'.$class.'.php';
        }
    });