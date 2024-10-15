<?php

//=====================================================================================================================

// Namespaces e classes DEVEM seguir um PSR de "carregamento automático"(autoloading): [ PSR-4 ].

//=====================================================================================================================

// Os nomes das classes DEVEM ser declarados em StudlyCaps.
//O que é StudlyCaps => É a forma como vc organza or nomes

//=====================================================================================================================
// As constantes de classe DEVEM ser declaradas em letras maiúsculas e com separadores de sublinhado.

//Ex:
?>
    <?php
        require 'matematica.php';
        
        echo "RESULTADO";
        $m - new Matematica();
        echo $m->soamr(5, 2);
        //Mostrando a constante na tela
        //OBS: Toda constante vira automaticamente uma constante estática
        echo "VERSÃO: ".Matematica::VERSION;
    ?>
<?php
    //Arquivo matematica.php
?>
    <?php
        class Matematica {
            //Toda constante precisa ser declara em caixa alta sempre
            const VERSION = '1.0';
            //Com dois nomes
            const DATE_APPROVED = '...';

            public function somar($x, $y) {
                return $x + $y;
            }
        }
    ?>
<?php

// Os nomes dos métodos DEVEM ser declarados em camelCase.
//O que é camelCase => O primeiro nome tem letra minúscula e o retante tem a primeira letra maiúscula
//Ex:
    class Mostrar {
        public function listarTodosItens() {
            return '........';
        }
    }

//Ainda tem uma última recomendação que é sobre o nome de variáveis
//Ex:
class Listar {
    //Usando camelCase
    private $mostrarTudo;

    //Usando StudlyCaps
    private $MostrarTudo;

    //Tudo minúsculo com underline
    private $mostrar_tudo;

    //Não importa a maneira que vc queira usar o importante é vc usar o mesmo padrão pra classe toda.
}