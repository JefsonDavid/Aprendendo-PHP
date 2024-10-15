<?php

//Nessa aula vamos falar sobre a PSR-1. A PSR-1 é a mais importante pois ela tem todo o básico atual e aceitavel para a padronização básica de código

//PSR-1: Basic Coding Stendard

// 1. VISÃO GERAL:

//=====================================================================================================================
// Os arquivos DEVEM usar somente as tags <?php e <?=.
//Ex:
?>

    <?php
        $nome = 'Jefson';
    ?>

    <?= $nome; ?>


<?php
//=====================================================================================================================
// Os arquivos DEVEM usar somente UTF-8 sem BOM para código PHP.

    //Quando vc clica em UTF-8 na parte inferior do seu VS CODE vai abrir as opções pra vc reabir com encoding e tbm a de salvar com encolding, cliando em salvar com encolding ele vai abrir varias opções que são as codificações dos bytes desse arquivo específico.

    //A recomendação é que sempre precisa ser salvo sempre sem BOM, esse BOM é um byte que ele coloca logo no começo do arquivo. Esse byte é responsável por uma dor de cabeça imensa, por exemplo se vc estiver usando um header location pra fazer um redirecionamento esse byte conta como uma impressão na tela, então mtas vezes vc tá com o arquivo com UTF-8 COM BOM e vc tenta fazer um redirecionamento e ele diz que não tem como fazer pois já foi impresso coisa na tela, ai vc olha o código e não tem nada impresso na tela é esse cara o causador e é por isso que é recomendado usar o UTF-8 sem o BOM.

//=====================================================================================================================
// Os arquivos DEVEM declarar símbolos (classes, funções, constantes, etc.) ou causar efeitos colaterais (por exemplo, gerar saída, alterar configurações .ini, etc.), mas NÃO DEVEM fazer as duas coisas.
    //Ex:
    //Arquivo index.php
?>
    <?php
        require 'matematica.php';

        echo "RESULTADO";
        $m = new Matematica();
        echo $m->somar(5, 2);
    ?>
<?php
    //Arquivo matematica.php
?>
    <?php
        class Matematica {
            public function somar($x, $y) {
                return $x + $y;
            }
        }
    ?>
<?php
    //Dessa forma acima estaria correto pois as (classes, funções, constates, etc.) precisam estar em um arquivo separado dos efeitos colaterais (por exemplo, gerar saída, alterar configurações .ini, etc.). OU SEJA, JAMAIS VC PODE COLOCAR TUDO NO MSM ARQUIVO.

//=====================================================================================================================
// Namespaces e classes DEVEM seguir um PSR de "carregamento automático": [ PSR-0 , PSR-4 ].

// Os nomes das classes DEVEM ser declarados em StudlyCaps.

// As constantes de classe DEVEM ser declaradas em letras maiúsculas e com separadores de sublinhado.

// Os nomes dos métodos DEVEM ser declarados em camelCase.

