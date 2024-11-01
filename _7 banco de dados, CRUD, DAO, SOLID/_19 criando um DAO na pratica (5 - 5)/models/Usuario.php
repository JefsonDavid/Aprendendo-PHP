<?php
    //Essa class será usada para manipular um usuário e precisa ter a msm estrutura dele
    class Usuario {
        private $id;
        private $nome;
        private $email;

        //Get e Set
        public function getId() {
            return $this->id;
        }

        public function setId($i) {
            //O trim serve para tirar eventuais espaços que a gente tenha. É uma boa prática usar
            $this->id = trim($i); 
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            //Usando o UCWORDS vc deixa sempre as primeiras letas do nome em maiúsculas, além do trim
            $this->nome = ucwords(trim($n));
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($e) {
            //A função STRTOLOWER joga todo o email em letras minúsculas
            $this->email = strtolower(trim($e));
        }
    }

    //Aqui começa o segundo passo para implementar o DAO que é criar a segunda classe que vai manipular o banco de dados.

    //Agora vamos criar uma padronização para a nossa implementação com uma interface

    //Vamos criar uma interface do usuário, ou seja, toda classe que quiser fazer uma implementação de banco de dados dessa classe usuários, ou seja, todo DAO de usuário, ele vai precisar seguir determinado padrão.

    interface UsuarioDAO {
        //===== CREATE =====
        //O add(Usuario $u); é para adicionar um usuário e ele vai receber um objeto da classe usuário
        public function add(Usuario $u);

         //===== READ =====
        //O findAll(); é para listar todo mundo
        public function findAll();
        //o findById($id); é para encontrar apenas um usuário pelo id, vc tbm pode colocar para buscar pelo nome
        public function findById($id);

        public function findByEmail($email);

        //===== UPDATE =====
        //O update(Usuario $u); recebe um objeto de usuário com os dados atualizado e substitui no banco de dados
        public function update(Usuario $u);

        //===== DELETE =====
        //O delete($id); vai deletar pelo ID. Aqui vc tbm pode deletar pelo usuário
        public function delete($id);
    }


    