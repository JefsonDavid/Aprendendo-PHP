<?php

    //Aqui ele vai receber o nome da classe
    spl_autoload_register(function($class){
        
        //Aqui vamos estabelecer uma variável para o diretório base
        //Esse __DIR__ é uma constante global que vai pegar o próprio diretório do arquivo onde estamos
        //O /classes/ é a referência da pasta de classes e que depois vc vai complementar com o resto da informação
        $base_dir = __DIR__.'/classes/';

        //Aqui vamos fazer a inversão das barras pois no namespace vc coloca as barras assim \ e as pastas as barras são assim /
        $file = $base_dir.str_replace('\\', '/', $class).'.php';//OBS: No php, quando a barra for pra esquerda, usa-se duas barras '\\' entre aspas para dizer que é apenas uma pois só uma vc estaria literalizando as aspas.


        //Agora vamos verificar se o arquivo existe
        if(file_exists($file)){
            //Se ele existir a gente puxa ele
            require $file;
        }
    });