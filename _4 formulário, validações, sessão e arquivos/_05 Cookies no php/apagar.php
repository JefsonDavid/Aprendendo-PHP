<?php

    //Para apagar o cookie vc tem que setar ele com um tempo de expiração no passado
    setcookie('nome', '', time() - 3600);
    
    //Mandando de volta para o index após deletar o cookie
    header("location: index.php");
    exit;