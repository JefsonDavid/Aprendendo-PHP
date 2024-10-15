<?php

    spl_autoload_register(function($class) {

        $base_do_diretorio = __DIR__.'/classes/';

        $arquivo = $base_do_diretorio.str_replace('\\', '/', $class).'.php';

        if(file_exists($arquivo)) {
            require $arquivo;
        }
    });