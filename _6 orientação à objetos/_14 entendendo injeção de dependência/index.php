<?php

    //Injeção de dependência é quando vc insere uma classe dentro de outra e normalmente é através do construtor mais não nescessariamente precisa ser através dele.

    interface MatematicaBasica {
        public function somar($x, $y);
    }

    class Basico1 implements MatematicaBasica {
        public function somar($x, $y) {
            return $x + $y;
        }
    }

    class Basico2 implements MatematicaBasica {
        public function somar($x, $y) {
            $res = $x;

            for ($a=0; $a<$y; $a++) {
                $res++;
            }
            return $res;
        }
    }

    Class Basico3 implements MatematicaBasica {
        public function somar($x, $y) {
            return 100;
        }
    }

    class Matematica {
        private $basico;

        public function __construct(MatematicaBasica $b) {
            //Aqui eu já vou criar meu objeto dentro do metodo construtor
            //$this->basico = new Basico2();

            //Agora eu vou receber uma variável com qual objeto eu quero criar aqui
            $this->basico = $b;
        }

        public function somar($x, $y) {
            //Aqui eu vou pegar os valores e vou mandar para a funçao somar do basico 1 ou 2 depende de qual eu vou querer e pego o resultado e salvo em basico e retorno ele.
            return $this->basico->somar($x, $y);
        }
    }

    //Agora é aqui que eu vou criar meu objeto
    $basico = new Basico1();

    //Aqui eu tô criando um objeto Matematica que automaticamente vai criar um objeto Basico1 no seu metodo construtor
    $mat = new Matematica($basico);//Aqui eu mando ele pra classe Matematica pro metodo construtor

    //Tbm é possível fazer dessa forma
    //$mat = new Matematica(new Basico1());

    echo $mat->somar(10, 15);
?>