<?php

    //PSR - 4

    //A PSR-4  diz a respeito do autoload 
    //Ela tem uma regra geral que diz que 

    //A PSR-1 diz que todo uso de classse, etc. tem que usar uma PSR de autoload no caso hj em dia só temos a PSR-4.
    
    //Como aplicamos a PSR-4 no nosso autoload?

    //1º Toda classe tem que pertencer a um namespace usando um padrão específico compativel com o autoload 

    //Importando o arquivo do autoload
    require 'autoload.php';

    
    use \matematica\Basica;
    use \foto\Upload;

    $m = new Basica();

    echo $m->somar(5, 15);