<?php

    class Multiplicar {
        private $resultado = 0;

        private function Multiplicar($a, $b) {
            $this->resultado = $a * $b;
        }

        public function setMultiplicar($a, $b) {
            $this->Multiplicar($a, $b);
        }

        public function getMultiplicar() {
            return $this->resultado;
        }
    }