<?php
    interface CalculadoraBasica {
        public function somar($x, $y);
        // public function sub($x, $y);
        // public function div($x, $y);
        // public function mult($x, $y);
    }

    class Adicao implements CalculadoraBasica {
        public function somar($x, $y) {
            return $x + $y;
        }
    }

    // class Subtracao implements CalculadoraBasica {
    //     public function sub($x, $y) {
    //         return $x - $y;
    //     }
    // }

    // class Divisao implements CalculadoraBasica {
    //     public function div($x, $y) {
    //         return $x / $y;
    //     }
    // }

    // class multiplicar implements CalculadoraBasica {
    //     public function mult($x, $y) {
    //         return $x * $y;
    //     }
    // }

    class Calculadora {
        private $basico;

        public function __construct(CalculadoraBasica $b){
            $this->basico = $b;
        }

        public function somar($x, $y) {
            return $this->basico->somar($x, $y);
        }

        public function sub($x, $y) {
            return $this->basico->sub($x, $y);
        }

        public function div($x, $y) {
            return $this->basico->div($x, $y);
        }

        public function mult($x, $y) {
            return $this->basico->mult($x, $y);
        }
    }

    $basico = new Adicao();

    $resultado = new Calculadora($basico);

    echo $resultado->somar(2, 2);