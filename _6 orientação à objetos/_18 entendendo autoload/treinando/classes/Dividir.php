<?php

    class Dividir {
        private $resultado = 0;

        private function dividir($a, $b) {
            $this->resultado = $a / $b;
        }

        public function setDividir($a, $b) {
            $this->dividir($a, $b);
        }

        public function getDividir() {
            return $this->resultado;
        }
    }