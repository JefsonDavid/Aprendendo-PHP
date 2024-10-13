<?php 

    class Pessoa {
        private int $id = 0;
        private string $nome = 'Vazio';
        private int $idade = 0;

        public function setId($i){
            //Verifica se o id é maior ou igual a 1
            if($i >= 1){
                $this->id = $i;
            }
        }

        public function getId(){
            return $this->id;
        }

        public function setNome($n){
            //Verifica se o nome tem mais que 3 caracteres
            if(strlen($n) >= 3){
                //Vai colocar a primeira letra do nome em maiúscula msm que esteja em minúscula
                $this->nome = ucfirst($n);
            }
        }

        public function getNome(){
            return $this->nome;
        }

        public function setIdade($ida){
            if($ida >= 1 and $ida <= 80){
                $this->idade = $ida;
            }
        }

        public function getIdade(){
            return $this->idade;
        }
    }


    class Cliente extends Pessoa {
        private string $endereco;
        private string $email;
        private int $telefone;

        public function __construct($i, $n, $ida, $tel){
            $this->setId($i);
            $this->setNome($n);
            $this->setIdade($ida);
            $this->setTelefone($tel);
        }

        public function setEndereco($end){
            if(strlen($end) >= 5){
                $this->endereco = $end;
            }
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setEmail($email){
            if(strlen($email) >= 7){
                $this->email = $email;
            }
        }

        public function getEmail(){
            return $this->email;
        }

        public function setTelefone($tel){
            $this->telefone = $tel;
        }

        public function getTelefone(){
            return $this->telefone;
        }
    }


    //Dessa forma eu passo todo os dado para o método __construct já na criação do objeto
    $hoje = new Cliente(3, 'David', 29, 61982536366);

    //Passando todos os dados já na criação do objeto não tem necessidade de passar um por um
    // $hoje->setId(5);
    // $hoje->setNome('jefson');
    // $hoje->setIdade(30);
    // $hoje->setTelefone(61982536366);

    echo $hoje->getId().'<br/>';
    echo $hoje->getNome().'<br/>';
    echo $hoje->getIdade().'<br/>';
    echo $hoje->getTelefone().'<br/>';
?>