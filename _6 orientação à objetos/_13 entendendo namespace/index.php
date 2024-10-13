<?php

    //NAMESPACE => É um reecurso que foi adicionado apartir da versão 5.6 do php e hj em dia é mto utilizado no PHP
    //O NAMESPACE foi criado como uma forma de vc conseguir encapsular classes, constantes, funções, etc. dentro de um grupo para que vc consiga eventualmente usar classes com o mesmo nome dentro da mesma aplicação

    //O namespace é utilizado pricipalmente para fazer divisão de pastas



    require 'classe1.php';
    require 'classe2.php';

    $a = new classe1\MinhaClasse();
    echo $a->testar();



    // 2ª PARTE =======================================================================    
    require 'classes\matematica\basico.php';
    //Vc pode colocar desse jeito ou...
    //$basico = new classes\matematica\Basico();

    //Pode dizer para o php o que é o basico
    use classes\matematica\Basico as Basico;

    //OBS: Quando o ultimo nome é o mesmo que vc vai usar como apelido basta fazer assim...
    //use classes\matematica\Basico;

    //Dessa forma sempre que precisar criar um novo objeto basta digitar assim
    $basico = new Basico();




?>