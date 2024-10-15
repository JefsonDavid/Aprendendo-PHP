<?php
//EXEMPLO PRÁTICO:

//eventualmente vamos precisar fazer uma classe de manipulação de banco de dados
class Database {
    private $engine;

//Desse forma independente do tipo de banco de dados que eu usar vou conseguir acessar aqui apenas mandando qual deles eu quero acessar.
    public function __construct(DatabaseInterface $eng) {
        $this->engine = $eng;
    }

    public function listarTudo() {
            return $this->engine->listar();
        }
    }


//Criando as classes dos banco de dados
    class MysqlEngine implements DatabaseInterface {
        public function listar() {
            // ...
        }
    }
    class OracleEngine implements DatabaseInterface {
        public function listar() {
            // ...
        }
    }
    class MongoEngine implements DatabaseInterface {
        public function listar() {
            // ...
        }
    }

//Como usar
$db = new Database( new MysqlEngine() );
$db->listarTudo();