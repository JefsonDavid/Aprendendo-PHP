<?php   
    //importando o nosso arquivo Usuario.php com a classe e a interface
    require_once 'models/Usuario.php';  

    //Fazendo a implementação
    class UsuarioDaoMysql implements UsuarioDAO {
        //Primeira coisa que vamos precisar é do PDO pois essa classe não tem PDO
        //Então vamos receber esse PDO de fora atráves de injeção de dependência
        private $pdo;

        //Quando eu instanciar a minha classe UsuarioDaoMysql eu vou precisar atomaticamente mandar tbm driver, ou seja, o cara que tá efetivamente fazendo a manipulação que é o próprio PDO
        //Eu vou receber aqui uma classe do tipo PDO que estamos colocando o nome de driver mais vc pode colocar outro nome como engine
        public function __construct(PDO $driver) {
            $this->pdo = $driver;
        }

        //===== CREATE =====
        //
        public function add(Usuario $u) {

        }

         //===== READ =====
        //
        public function findAll() {
            $array = [];

            //Fazendo a implementação de findAll
            //1º vamos usar o próprio PDO para fazer a consulta
            $sql = $this->pdo->query("SELECT * FROM usuarios");
            //2º vamos ferficar se teve algum item
            if($sql->rowCount() > 0) {
                //Se tiver algum item vamos colocar em data
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
        //
        public function findById($id) {

        }

        //===== UPDATE =====
        //
        public function update(Usuario $u) {

        }

        //===== DELETE =====
        //
        public function delete($id) {

        }
    }