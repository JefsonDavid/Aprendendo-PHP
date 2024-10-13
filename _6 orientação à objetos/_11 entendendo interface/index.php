<?php
    //=================================================================================================================
    //Interface => É um guia de implementaçao de uma classe. Quando vc cria uma classe vc tá craindo uma coisa abstrata, ou seja, um modelo pra ser usado quando vc instanciar quando vc criar um objeto.
    //A INTERFACE é um nível acima disso, ou seja, se vc acha que a classe é o abstrato a interface é o abstrato do abstrato, como assim? 
    //A interface só tem um uso específico, ela só precisa ser feita quando a situação for do jeito apresentado no exemplo abaixo, caso contrário o uso de interface vai forçar, complicar e prejudicar o código.
    //=================================================================================================================

    //Exemplo de inteface
    //Supondo que estamos criando um sistema de gerênciamento de banco de dados pra uma loja virtual.
    //No exemplo vamos fazer uma interface que basicamente vai criar um modelo mental para que as classes de gerênciamento  de banco de dados efeivas funcionem, como assim? Vamos supor que o nosso banco de dados ele é hoje na nossa loja virtual é um banco de dados MySql. A gente vai fazer o CRUD com o MySql.


    //Sempre que a gente mexe com BD a gente mexe com LEITURA, ESCRITA, ALTERAÇÃO e REMOÇÃO DE DADOS
    //Vamos supor que estamos usando o MySql, vamos precisar fazer tudo isso...
    // class MysqlBD{
    //     public function listarProdutos(){

    //     }
    //     public function adicionarProduto(){

    //     }
    //     public function alterarProduto(){

    //     }
    //     public function removerProduto(){

    //     }
    // }

    //Porém vamos dizer que foi decidido mudar de banco de dados e agora vamos usar o OracleDB, vamos precisar fazer tudo isso novamente

    // class OracleBD{
    //     public function listarProdutos(){

    //     }
    //     public function adicionarProduto(){

    //     }
    //     public function alterarProduto(){

    //     }
    //     public function removerProduto(){

    //     }
    // }

    //Nesse caso é importante a gente criar um inteface, uma vezes que a estrutura de ambas são idênticas

    interface Database {
        public function listarProdutos();
        public function adicionarProduto();
        public function alterarProduto();
        public function removerProduto();
    }

    class MysqlDB implements Database {
        public function listarProdutos(){

        }
        public function adicionarProduto(){
            echo "Adicionando com MysqlDB";
        }
        public function alterarProduto(){

        }
        public function removerProduto(){

        }
    }

    class OracleDB implements Database {
        public function listarProdutos(){

        }
        public function adicionarProduto(){
            echo "Adicionando com OracleDB";
        }
        public function alterarProduto(){

        }
        public function removerProduto(){

        }
    }

    class NodeDB implements Database {
        public function listarProdutos(){

        }
        public function adicionarProduto(){
            echo "Adicionando com NodeBD";
        }
        public function alterarProduto(){

        }
        public function removerProduto(){

        }
    }

    $db =  new OracleDB();
    $db->adicionarProduto();




?>