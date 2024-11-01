<?php   
    //importando o nosso arquivo Usuario.php com a classe e a interface
    require_once 'models/Usuario.php';  

    //Fazendo a implementação
    class UsuarioDaoMysql implements UsuarioDao {
        //Primeira coisa que vamos precisar é do PDO pois essa classe não tem PDO
        //Então vamos receber esse PDO de fora atráves de injeção de dependência
        private $pdo;

        //Quando eu instanciar a minha classe UsuarioDaoMysql eu vou precisar automaticamente mandar tbm driver, ou seja, o cara que tá efetivamente fazendo a manipulação que é o próprio PDO
        //Eu vou receber aqui uma classe do tipo PDO que estamos colocando o nome de driver mais vc pode colocar outro nome como engine
        public function __construct(PDO $driver) {
            $this->pdo = $driver;
        }

        //===== CREATE =====
        public function add(Usuario $u) {
            //Aqui vamos receber um usuário e adicionar no banco de dados
            $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
            //Como eu sei que é um objeto de usuário vou usar o getNome()
            $sql->bindValue(':nome', $u->getNome());
            $sql->bindValue(':email', $u->getEmail());
            $sql->execute();

            //O lastInsertId() é uma função do PDO que vai pegar o último ID que foi inserido nessa requisição de cima e nesse caso joga ele em setId()
            $u->setId($this->pdo->lastInsertId());
            return $u;
        }

         //===== READ =====
        public function findAll() {
            $array = [];

            //Fazendo a implementação de findAll
            //1º vamos usar o próprio PDO para fazer a consulta
            $sql = $this->pdo->query("SELECT * FROM usuarios");
            //2º vamos verficar se tem algum item
            if($sql->rowCount() > 0) {
                //Se tiver algum item vamos colocar em $data
                $data = $sql->fetchAll();

                //Feito isso vamos fazer um foreach nos dados que recebemos para poder criar os objetos
                foreach($data as $item) {
                    //Aqui dentro de foreach vamos criar um objeto pra encher ele e jogar no array
                    $u = new Usuario(); //Criei o objeto
                    //Preenchendo ele com os dados do banco
                    $u->setId($item['id']); 
                    $u->setNome($item['nome']);
                    $u->setEmail($item['email']);

                    //Agora vou jogar meu objeto dentro do array
                    $array[] = $u;
                }
            }

            return $array;
        }

        public function findById($id) {
            //Esse cara vai retornar o próprio usuário ou então ele retorna false
            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            //Agora vamos fazer uma verificação se existe algum usuário com esse email
            if($sql->rowCount() > 0) {
                //Ele vai montar o obejto
                $data = $sql->fetch();//Vamos retornar somente um usuário

                $u = new Usuario();
                $u->setId($data['id']);
                $u->setNome($data['nome']);
                $u->setEmail($data['email']);

                return $u;

            } else {
                return false;
            }
        }

        public function findByEmail($email) {
            //Esse cara vai retornar o próprio usuário ou então ele retorna false
            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
            $sql->bindValue(':email', $email);
            $sql->execute();

            //Agora vamos fazer uma verificação se existe algum usuário com esse email
            if($sql->rowCount() > 0) {
                //Ele vai montar o obejto
                $data = $sql->fetch();//Vamos retornar somente um usuário

                $u = new Usuario();
                $u->setId($data['id']);
                $u->setNome($data['nome']);
                $u->setEmail($data['email']);

                return $u;

            } else {
                return false;
            }
        }

        //===== UPDATE =====
        public function update(Usuario $u) {
            $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
            $sql->bindValue(':nome', $u->getNome());
            $sql->bindValue(':email', $u->getEmail());
            $sql->bindValue(':id', $u->getId());
            $sql->execute();

            return true;
        }

        //===== DELETE =====
        public function delete($id) {
            $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
        }
    }