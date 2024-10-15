<?php

    require 'autoload.php';

    use \somar\Soma;

    $tds = new Soma();

    $tds->setSomar(2, 3);

    echo $tds->getSomar();