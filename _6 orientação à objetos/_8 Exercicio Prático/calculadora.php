<?php

    class Calculadora {
        public $resultado = 0;

        public function total(){
            return $this->resultado;
        }

        public function clear(){
            $this->resultado = 0;
        }

        public function add($x){
            $this->resultado = $this->resultado + $x;
            //return $this->resultado;
            
        }
        
        public function sub($x){
            $this->resultado = $this->resultado - $x;
        // return $this->resultado;
        }

        public function mult($x){
            $this->resultado = $this->resultado * $x;
            //return $this->resultado;
        }

        public function div($x){
            $this->resultado = $this->resultado / $x;
            //return $this->resultado;
        }
    }



?>