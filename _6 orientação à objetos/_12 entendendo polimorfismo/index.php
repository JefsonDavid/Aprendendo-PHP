<?php 

    //Para entender POLIMORFISMO precisamos saber interface primeiro pois a interface é um polimorfismo 
    //O objetivo do exercício é mostrar a área dos obejtos
    
    //=================================================================================================================
    //Criando uma interface
    interface Forma {
        public function getTipo();
        public function getArea();
    }
    
    //=================================================================================================================
    //Vamos criar as classes dos objetos
    class Quadrado implements Forma {
        //Para saber a area de um quadrado vamos precisar da largura e da altura dele
        private $largura;
        private $altura;

        //Pra saber a area vamos precisar do método construtor para receber a altura e a largura do quadrado
        public function __construct($l, $a) {
            $this->largura = $l;
            $this->altura = $a;
        }

        //getTipo vai retornar apenas o tipo do objeto
        public function getTipo() {
            return 'Quadrado';
        }

        //getArea vai retornar a area do nosso quadrado
        public function getArea() {
            return $this->largura * $this->altura;
        }
    }

    class Circulo implements Forma {
        //Para saber a area de um circulo vamos precisar apenas do raio dele
        private $raio;

        //O método construtor para receber a variável do raio
        public function __construct($r) {
            $this->raio = $r;
        }

        public function getTipo() {
            return 'Criculo';
        }

        //Para saber a área de um circulo vamos precisar pegar PI * o raio ao quadrado
        public function getArea() {
            return pi() * ($this->raio * $this->raio);
        }
            
    }

    //=================================================================================================================
    //Criando os objetos
    //No quadrado vamos precisar mandar a largura e a altura
    $quadrado = new Quadrado(5, 5);
    //No circulo temos que mandar o raio
    $circulo = new Circulo(7);

    //=================================================================================================================
    //Vamos supor que temos um array com vários objetos
    $objetos = [
        $quadrado,
        $circulo
    ];

    //=================================================================================================================
    //Vamos criar um laço de repetição para rodar os dois objetos
    foreach($objetos as $objeto) {
        //vc pode colocar assim:
        //echo "TIPO: ".$objeto->getTipo()." - AREA: ".$objeto->getArea()."<br/>";

        //Ou vc pode usar variáveis 
        $tipo = $objeto->getTipo();
        $area = $objeto->getArea();

        echo "TIPO: ".$tipo." - AREA: ".$area."<br/>";
    }


?>